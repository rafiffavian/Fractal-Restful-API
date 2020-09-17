<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            ['name' => 'reno',
            'email' => 'reno@gmail.com',
            'password' => Hash::make('56789')],

            ['name' => 'eko',
            'email' => 'eko@gmail.com',
            'password' => Hash::make('eko123')],

            ['name' => 'fafa',
            'email' => 'fafa@yahoo.com',
            'password' => Hash::make('fafa232323')]
        ]);
    }
}
