<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['type' => '0',
                'value' => 'How WE Can Help?',
            ],
            ['type' => '1',
                'value' => 'Guaranteed scholarships for deserving students',
            ],
            ['type' => '1',
                'value' => 'Perfect Visa Guidance',
            ],
            ['type' => '1',
                'value' => 'Well Experienced Staff',
            ],
            ['type' => '1',
                'value' => 'Work Honesty',
            ],
            ['type' => '1',
                'value' => 'Homely Environment',
            ],
            ['type' => '1',
                'value' => 'Expert Advice For Low Fund Course',
            ],
            ['type' => '1',
                'value' => 'Application Processing',
            ],
            ['type' => '1',
                'value' => 'Free Interview Training',
            ],
            ['type' => '1',
                'value' => 'Pre-departure & Post Landing Services',
            ],
            ['type' => '1',
                'value' => 'Air Ticket & Forex Arrangement',
            ],
            ['type' => '1',
                'value' => 'Accommodation Arrangement',
            ],
            ['type' => '1',
                'value' => 'College University Transfer',
            ],
            ['type' => '1',
                'value' => 'Visa Extension',
            ],
            ['type' => '1',
                'value' => 'No Charges for Spouse Visa',
            ],
            ['type' => '1',
                'value' => 'Finance Assistance',
            ],
            ['type' => '1',
                'value' => 'Parents & Family Visa Supports',
            ],
            ['type' => '1',
                'value' => 'Pay After Visa Facility',
            ]
        ]);
    }
}
