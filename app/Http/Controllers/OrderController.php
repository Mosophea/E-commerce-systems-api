<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'delivery_address' => ['required', 'string'],
            'delivery_slot' => ['required', 'string', 'max:100'],

            'payment_method' => [
                'required',
                Rule::in(['card', 'qr', 'cod']),
            ],

            'items' => ['required', 'array', 'min:1'],
            'items.*.product_id' => [
                'required',
                'integer',
                'exists:products,id',
            ],
            'items.*.quantity' => [
                'required',
                'integer',
                'min:1',
            ],
            'items.*.image_url' => [
                'nullable',
                'string',
                'max:2048',
            ],

            'discount_amount' => [
                'nullable',
                'numeric',
                'min:0',
            ],
            'delivery_fee' => ['required', 'numeric', 'min:0'],
            'taxes_and_bagging' => [
                'required',
                'numeric',
                'min:0',
            ],
        ]);

        $order = DB::transaction(function () use ($data) {
            $subtotal = 0;
            $orderItems = [];

            // Check current stock and get trusted product prices.
            foreach ($data['items'] as $item) {
                $product = Product::where(
                    'id',
                    $item['product_id']
                )->lockForUpdate()->first();

                if (!$product) {
                    throw ValidationException::withMessages([
                        'items' => ['A selected product no longer exists.'],
                    ]);
                }

                $quantity = (int) $item['quantity'];

                if ($product->stock < $quantity) {
                    throw ValidationException::withMessages([
                        'items' => [
                            $product->name . ' has only '
                                . $product->stock . ' items in stock.',
                        ],
                    ]);
                }

                // Always use the price stored in the database.
                $price = (float) $product->price;
                $itemSubtotal = round($price * $quantity, 2);

                $subtotal += $itemSubtotal;

                $orderItems[] = [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $price,
                    'quantity' => $quantity,
                    'subtotal' => $itemSubtotal,
                    'image_url' => $product->image,
                ];
            }

            $subtotal = round($subtotal, 2);

            $discount = min(
                (float) ($data['discount_amount'] ?? 0),
                $subtotal
            );

            $delivery = (float) $data['delivery_fee'];
            $taxes = (float) $data['taxes_and_bagging'];

            $total = round(
                $subtotal - $discount + $delivery + $taxes,
                2
            );

            // Create the main order.
            $order = Order::create([
                'order_number' => 'FM-' . Str::uuid(),
                'customer_name' => $data['customer_name'],
                'customer_phone' => $data['customer_phone'],
                'delivery_address' => $data['delivery_address'],
                'delivery_slot' => $data['delivery_slot'],
                'payment_method' => $data['payment_method'],
                'subtotal' => $subtotal,
                'discount_amount' => round($discount, 2),
                'delivery_fee' => round($delivery, 2),
                'taxes_and_bagging' => round($taxes, 2),
                'total' => $total,
                'status' => 'pending',
            ]);

            // Save order items and deduct stock.
            foreach ($orderItems as $item) {
                $order->items()->create($item);

                Product::where('id', $item['product_id'])
                    ->decrement('stock', $item['quantity']);
            }

            return $order->load('items');
        });

        return response()->json([
            'success' => true,
            'message' => 'Order saved successfully.',
            'data' => $order,
        ], 201);
    }

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Order::with('items')
                ->latest()
                ->get(),
        ]);
    }

    public function show(string $id)
    {
        $order = Order::with('items')->find($id);

        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $order,
        ]);
    }
}
