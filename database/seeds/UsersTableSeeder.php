<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'globalhr',
            'email' => 'enquiry.globaledu@gmail.com',
            'password' => bcrypt('global@hr123'),
        ]);
    }
}
