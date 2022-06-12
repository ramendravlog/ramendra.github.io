<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
              
            'name'=>'Samsung mobile',
            'price'=>'400',
            'category'=>'mobile',
            'description'=>' A smartphone New Arrival
            Galaxy S22 Ultra and much more features',
            'gallery'=>'https://images.samsung.com/is/image/samsung/assets/in/smartphones/galaxy-s22/buy/S22_ULTRA_KV_4_PC.jpg?imwidth=1366',
            ],
            [
              
             'name'=>'Oppo mobile',
             'price'=>'500',
             'category'=>'mobile',
             'description'=>' A smartphone OPPO
              F21 Pro and much more features',
             'gallery'=>'https://opsg-img-cdn-gl.heytapimg.com/epb/202204/12/TDxbQJJpMFw8I2Vn.jpg',
                ],
                [
              
                    'name'=>'Soni Tv',
                    'price'=>'700',
                    'category'=>'tv',
                    'description'=>' A tv with  much more features',
                    'gallery'=>'https://m.media-amazon.com/images/I/81lpllAGcBL._SL1500_.jpg',
                    ],
                    [
              
                        'name'=>'LG fridge',
                        'price'=>'200',
                        'category'=>' fridge',
                        'description'=>' A fridge with much more features',
                        'gallery'=>'https://m.media-amazon.com/images/I/61UTlibhl+L._SY679_.jpg',
                        ],
                        [
              
                            'name'=>'Samsung Tv',
                            'price'=>'200',
                            'category'=>'tv',
                            'description'=>' A tv with much more features',
                            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/feature/130517163/in-feature-uhd-4k-tv-437112200?imwidth=1366',
                            ],
                            [
              
                                'name'=>'LG Tv',
                                'price'=>'700',
                                'category'=>'tv',
                                'description'=>' A LG smart tv with  much more features',
                                'gallery'=>'https://d2d22nphq0yz8t.cloudfront.net/88e6cc4b-eaa1-4053-af65-563d88ba8b26/https://media.croma.com/image/upload/v1628519161/Croma%20Assets/Entertainment/Television/Images/241271_f9ma1m.png/mxw_1440,f_auto',
                            ],
                                ['name'=>'Samsung fridge',
                                'price'=>'200',
                                'category'=>' fridge',
                                'description'=>' A fridge with much more features',
                                'gallery'=>'https://d2d22nphq0yz8t.cloudfront.net/88e6cc4b-eaa1-4053-af65-563d88ba8b26/https://media.croma.com/image/upload/v1634210296/Croma%20Assets/Large%20Appliances/Refrigerator/Images/244844_kadcfw.png/mxw_1440,f_auto',
                                ]
       
        ]);
    }
}
