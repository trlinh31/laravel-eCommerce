<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'admin@pro',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'level' => 0,
            ],
            [
                'name' => 'Linh Trần',
                'email' => 'abc@gmail.com',
                'password' => Hash::make('12345'),
                'level' => 1,
            ]
        ]);
        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 2,
                'messages' => 'Sản phẩm quá đẹp ! Vượt sức tưởng tượng.',
            ],
        ]);
        DB::table('product_categories')->insert([
            [
                'name' => 'Women',
            ],
            [
                'name' => 'Men',
            ],
        ]);
        DB::table('products')->insert([
            [
                'product_category_id' => 1,
                'name' => 'Product 1',
                'qty' => 10,
                'price' => 1000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '1.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 2',
                'qty' => 20,
                'price' => 2000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '2.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 3',
                'qty' => 30,
                'price' => 3000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '3.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 4',
                'qty' => 40,
                'price' => 4000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '4.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 5',
                'qty' => 50,
                'price' => 5000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '5.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 6',
                'qty' => 60,
                'price' => 900,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '6.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 7',
                'qty' => 70,
                'price' => 7000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '7.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 8',
                'qty' => 0,
                'price' => 700,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '8.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 9',
                'qty' => 0,
                'price' => 1000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '9.jpg'
            ],
            [
                'product_category_id' => 1,
                'name' => 'Product 10',
                'qty' => 10,
                'price' => 1000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '10.jpg'
            ],
            [
                'product_category_id' => 2,
                'name' => 'Product 11',
                'qty' => 10,
                'price' => 10000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '11.jpg'
            ],
            [
                'product_category_id' => 2,
                'name' => 'Product 12',
                'qty' => 10,
                'price' => 13000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '12.jpg'
            ],
            [
                'product_category_id' => 2,
                'name' => 'Product 13',
                'qty' => 10,
                'price' => 5000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum id elit ac posuere. In auctor et ligula ac molestie. Nunc lobortis cursus arcu in laoreet. Integer commodo hendrerit laoreet. Aenean consequat at purus id gravida. Praesent in aliquet tortor.',
                'path' => '13.jpg'
            ],
        ]);
    }
}
