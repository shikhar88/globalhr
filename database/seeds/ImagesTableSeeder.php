<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['type' => 'banner',
                'path' => '/uploads/banner_images/DyzoTku4vZsaUPWkCKdzGE7JixzlunPil2wxKxAkvBn3jlhoMkMEoRECLplqji56jXP4W8o5L82DyP1j.png',
                'active'=>'1'
            ],
            ['type' => 'banner',
                'path' => '/uploads/banner_images/kuAQ9HYyV4ArANrB9AbX1k4fF6oP2ipT96uIfhJmPXwrUhGf80Vue7BEIFKzCiRwqqFtEBNyxF2TBOS4.jpeg',
                'active'=>'1'
            ],
            ['type' => 'banner',
                'path' => '/uploads/banner_images/KcBSV8f1FWYtXoGfzJUmGeRdys1kFbzGSj2ukNJwrfcvDpuuD7kd0ehLiLEI52hVIJIJxeT5apv6t91j.jpeg',
                'active'=>'1'
            ],
            ['type' => 'banner',
                'path' => '/uploads/banner_images/085KGuVyQw8vQqsQDLNwFujPeAY4bHTQflJnIC4QJcVbgmnKGfG9Dm7sOxj7dw3QNc7dRiFOgDrMeHyP.jpeg',
                'active'=>'1'
            ]
        ]);
    }
}
