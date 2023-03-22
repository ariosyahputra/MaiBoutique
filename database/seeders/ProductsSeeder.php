<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            [
                'name' => "Green T-Shirt",
                'price' => 90000,
                'stock' => 100,
                'image'=> "Green_T-Shirt.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Navy T-Shirt",
                'price' => 155000,
                'stock' => 50,
                'image'=> "navy_T-Shirt.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Green Shirt",
                'price' => 120000,
                'stock' => 100,
                'image'=> "Green_Shirt.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Blue Hoodie",
                'price' => 300000,
                'stock' => 15,
                'image'=> "Blue_Hoodie.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Green Sweater",
                'price' => 250000,
                'stock' => 30,
                'image'=> "Green_Sweater.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Red Sweater",
                'price' => 135000,
                'stock' => 70,
                'image'=> "Red_Sweater.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Vest",
                'price' => 200000,
                'stock' => 50,
                'image'=> "Vest.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Legging",
                'price' => 100000,
                'stock' => 50,
                'image'=> "Legging.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => "Sock",
                'price' => 40000,
                'stock' => 70,
                'image'=> "Sock.jpg",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam ipsum blanditiis at possimus vero alias quaerat fugit nisi accusantium nihil quo, sed iusto, amet unde laudantium dicta molestiae molestias corporis assumenda! Commodi architecto eius quis enim quo, nostrum sint unde impedit quae optio fuga quam voluptas culpa animi aliquid vel corrupti beatae eos quasi assumenda. Nemo, enim tenetur. Voluptate laborum architecto error molestiae quam minus recusandae? Rerum, libero! Consequatur.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
