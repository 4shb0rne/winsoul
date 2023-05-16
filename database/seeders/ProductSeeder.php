<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iemData = [
            [
                'productname' => 'KZ ZS10 Pro',
                'productprice' => 49.99,
                'productdescription' => 'The KZ ZS10 Pro is a popular Chi-Fi IEM with a 5-driver configuration, providing detailed sound reproduction and a detachable cable for easy replacement.',
                'productimage' => 'kz-zs10-pro.webp'
            ],
            [
                'productname' => 'Tin T2',
                'productprice' => 39.99,
                'productdescription' => 'The Tin T2 is a well-regarded Chi-Fi IEM known for its neutral sound signature, high-resolution audio quality, and comfortable fit.',
                'productimage' => 'Tin-t2.jpeg'
            ],
            [
                'productname' => 'Moondrop Blessing 2',
                'productprice' => 299.99,
                'productdescription' => 'The Moondrop Blessing 2 is a flagship Chi-Fi IEM featuring a hybrid driver configuration and excellent tonal balance, making it suitable for audiophiles.',
                'productimage' => 'moondrop-blessing-2.jpeg'
            ],
            [
                'productname' => 'TRN V90',
                'productprice' => 79.99,
                'productdescription' => 'The TRN V90 is a value-for-money Chi-Fi IEM with 4 balanced armature drivers, offering detailed and immersive sound reproduction at an affordable price point.',
                'productimage' => 'TRN-V90.jpeg'
            ],
        ];

        foreach ($iemData as $data) {
            Product::create([
                'productname' => $data['productname'],
                'productprice' => $data['productprice'],
                'productdescription' => $data['productdescription'],
                'productimage' => $data['productimage']
            ]);
        }
    }
}
