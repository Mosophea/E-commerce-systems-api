<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Meat
            [
                'name' => 'Beef Ribeye Steak',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 9.50,
                'image' => 'assets/images/beef/beef1.png',
                'category' => 'Steak',
                'type' => 'meat',
            ],
            [
                'name' => 'Beef Ribeye Steak',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 8.50,
                'image' => 'assets/images/beef/beef2.png',
                'category' => 'Steak',
                'type' => 'meat',
            ],
            [
                'name' => 'Beef Ribeye Steak',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 7.50,
                'image' => 'assets/images/beef/beef3.png',
                'category' => 'Steak',
                'type' => 'meat',
            ],
            [
                'name' => 'Beef Ribeye Steak',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 6.50,
                'image' => 'assets/images/beef/beef4.png',
                'category' => 'Steak',
                'type' => 'meat',
            ],
            [
                'name' => 'Beef Ribeye Steak',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/beef/beef5.png',
                'category' => 'Steak',
                'type' => 'meat',
            ],

            // Chicken
            [
                'name' => 'Chicken Breast',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 9.00,
                'image' => 'assets/images/chicken/chicken1.png',
                'category' => 'Chicken',
                'type' => 'chicken',
            ],
            [
                'name' => 'Chicken Breast',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/chicken/chicken2.png',
                'category' => 'Chicken',
                'type' => 'chicken',
            ],
            [
                'name' => 'Lightly Breaded',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 8.50,
                'image' => 'assets/images/chicken/chicken3.png',
                'category' => 'Chicken',
                'type' => 'chicken',
            ],

            // Pork
            [
                'name' => 'Pork',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 9.50,
                'image' => 'assets/images/pork/pork1.png',
                'category' => 'Pork',
                'type' => 'pork',
            ],
            [
                'name' => 'Pork',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 2.50,
                'image' => 'assets/images/pork/pork2.png',
                'category' => 'Pork',
                'type' => 'pork',
            ],
            [
                'name' => 'Pork',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 4.50,
                'image' => 'assets/images/pork/pork3.png',
                'category' => 'Pork',
                'type' => 'pork',
            ],

            // Vegetables
            [
                'name' => 'Vegetable',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 6.50,
                'image' => 'assets/images/vegetable/toy.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            [
                'name' => 'Tomatoes',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 4.50,
                'image' => 'assets/images/vegetable/tomatoes.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            [
                'name' => 'Salat',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 2.50,
                'image' => 'assets/images/vegetable/salat.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            [
                'name' => 'Eggplant',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/vegetable/eggplant.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            [
                'name' => 'Mustard Green',
                'description' => 'Natural ,Good for headlthy, Extra energy, Good Price.',
                'price' => 1.50,
                'image' => 'assets/images/vegetable/Mustard.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            [
                'name' => 'Garlic',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 1.50,
                'image' => 'assets/images/vegetable/garlic.jpg',
                'category' => 'Vegetable',
                'type' => 'vegetable',
            ],
            //Fruit
            [
                'name' => 'Asianpear',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/fruit/Asianpear.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            [
                'name' => 'Avocado',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 6.50,
                'image' => 'assets/images/fruit/avocado.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            [
                'name' => 'Passion',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/fruit/passion.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            [
                'name' => 'Pineapple',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 4.50,
                'image' => 'assets/images/fruit/pineapple.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            [
                'name' => 'Pomegranate',
                'description' => 'gmo-free, Sweet and Delicous, organic.',
                'price' => 2.50,
                'image' => 'assets/images/fruit/pomegranate.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            [
                'name' => 'Strawberries',
                'description' => 'fresh, good for healthy, organic.',
                'price' => 4.50,
                'image' => 'assets/images/fruit/strawberries.jpg',
                'category' => 'Fruit',
                'type' => 'fruit',
            ],
            //Salty
            [
                'name' => 'Garlic',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 8.50,
                'image' => 'assets/images/salty/Garlic.jpg',
                'category' => 'Salty',
                'type' => 'salty',
            ],
            [
                'name' => 'Himalayan',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 8.50,
                'image' => 'assets/images/salty/Himalayan.jpg',
                'category' => 'Salty',
                'type' => 'salty',
            ],
            [
                'name' => 'Himalayan Pink',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 2.50,
                'image' => 'assets/images/salty/Himalayan1.jpg',
                'category' => 'Salty',
                'type' => 'salty',
            ],
            [
                'name' => 'Himalayan Black',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/salty/Himalayan2.jpg',
                'category' => 'Salty',
                'type' => 'salty',
            ],
            [
                'name' => 'Snappy Salt',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 7.50,
                'image' => 'assets/images/salty/SnappySalt.jpg',
                'category' => 'Salty',
                'type' => 'salty',
            ],
            //Sauce
            [
                'name' => 'Dres Island',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/sauce/Dres.jpg',
                'category' => 'Sauce',
                'type' => 'sauce',
            ],
            [
                'name' => 'GoldenCurry',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 7.50,
                'image' => 'assets/images/sauce/GoldenCurry.jpg',
                'category' => 'Sauce',
                'type' => 'sauce',
            ],
            [
                'name' => 'Kikkoman',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/sauce/Kikkoman.jpg',
                'category' => 'Sauce',
                'type' => 'sauce',
            ],
            [
                'name' => 'Mambo',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/sauce/Mambo.jpg',
                'category' => 'Sauce',
                'type' => 'sauce',
            ],
            [
                'name' => 'Marinade',
                'description' => 'gmo-free, grass-fed, organic.',
                'price' => 5.50,
                'image' => 'assets/images/sauce/Marinade.jpg',
                'category' => 'Sauce',
                'type' => 'sauce',
            ],
        ];


        foreach ($products as $product) {
            $identity = [
                'name' => $product['name'],
                'image' => $product['image'],
            ];

            $existing = DB::table('products')
                ->where($identity)
                ->exists();

            $values = array_merge($product, [
                'updated_at' => now(),
            ]);

            if ($existing) {
                // Update product details without changing its stock.
                unset($values['stock']);

                DB::table('products')
                    ->where($identity)
                    ->update($values);
            } else {
                // New products start with 20 items in stock.
                $values['stock'] = 50;
                $values['created_at'] = now();

                DB::table('products')->insert(
                    array_merge($identity, $values)
                );
            }
        }
    }
}
