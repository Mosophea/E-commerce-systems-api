
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('order_number')->unique();

            // Delivery Address section
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->text('delivery_address');

            // Delivery Time Slot section
            $table->string('delivery_slot');

            // Payment Method section
            $table->string('payment_method');

            // Payment Summary section
            $table->decimal('subtotal', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->decimal('delivery_fee', 10, 2)->default(0);
            $table->decimal('taxes_and_bagging', 10, 2)->default(0);
            $table->decimal('total', 10, 2);

            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
