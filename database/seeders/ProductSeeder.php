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
            [
                'productname' => 'Tangzu Wan\'er',
                'productprice' => 19.99,
                'productdescription' => 'Equipped with a 10mm single dynamic driver, Wan\'er S.G is eventually launched after 5 times of driver adjustments during tuning development.',
                'productimage' => 'waner.webp'
            ],
            [
                'productname' => '7hz Timeless',
                'productprice' => 219.99,
                'productdescription' => 'Adopts Double-sided Array N52 Magnet and Ultra-thin Diaphragm, 14.2mm Planar Driver, CNC Aluminum Shell, Detachable MMCX Cable, and Lightweight and Comfortable',
                'productimage' => '7hz-timeless.avif'
            ],
            [
                'productname' => 'TinHifi T3 Plus',
                'productprice' => 69.00,
                'productdescription' => '10mm LCP Diaphragm Hi-Fi Earphone, Latest Generation Liquid Crystal Polymer Diaphragm, Balanced Tuning, Ergonomic Design, Exquisite Faceplate, High Quality Oxygen-free Copper Cable',
                'productimage' => 'tin_hifi_t3.webp'
            ],
            [
                'productname' => '7Hz Salnotes Zero',
                'productprice' => 25.99,
                'productdescription' => '10mm Dynamic Driver With Metal Composite Diaphragm, Ergonomic Shape&Metal Housing, Detachable High Purity OFC Cable, N52 Magnet, Fine Tuning',
                'productimage' => '7hz-saltnotes.avif'
            ],
            [
                'productname' => 'Moondrop Kato',
                'productprice' => 189.99,
                'productdescription' => 'Developed ULT Dynamic Driver In Ear Earphone, Brand-New Developed ULT Super-Linear Dynamic Driver, 3rd Generation DLC Composite Diaphragm, Exquisite Design, Replaceable Sound Nozzle Design & Developed Spring Tips, Excellent Listening Experience',
                'productimage' => 'moondrop-kato.webp'
            ],
            [
                'productname' => 'Moondrop Blessing 3',
                'productprice' => 319.99,
                'productdescription' => 'Advanced 2DD +4BA Hybrid Triple-range Frequency Division In-ear Monitors, Full-bodied and authentically natural sound quality',
                'productimage' => 'moondrop-blessing-3.webp'
            ],
            [
                'productname' => 'Salnotes Dioko',
                'productprice' => 89.9,
                'productdescription' => '4.6mm Planar Diaphragm Driver In Ear Earphone, 7Hz x Crinacle Tuning, N55 Magnet, Double-sided Array, Fine Tuned CNC-Machined Aluminum Shell',
                'productimage' => 'dioko.webp'
            ],
            [
                'productname' => 'ThieAudio Monarch MKII',
                'productprice' => 999.99,
                'productdescription' => 'NEW Tribrid King - 1DD + 6BA + 2EST In-Ear Monitor, Upgraded Brand New 10mm Composite Diaphragm Dynamic Driver, Balanced Armatures from Sonion and Knowles, Sonion Electrostatic Drivers',
                'productimage' => 'monarch-mk2.webp'
            ]
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
