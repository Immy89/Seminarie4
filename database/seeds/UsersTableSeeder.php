<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'          =>  'Kim',
            'email'             =>  'ksather@kth.se',
            'password'          =>  Hash::make('Hej123'),
            'remember_token'    =>  str_random(10)
        ]);

        User::create([
            'username'          =>  'Stina',
            'email'             =>  'Stina@gmail.com',
            'password'          =>  Hash::make('1234'),
            'remember_token'    =>  str_random(10)
        ]);

        User::create([
            'username'          =>  'Kalle',
            'email'             =>  'Kalle@gmail.com',
            'password'          =>  Hash::make('1234'),
            'remember_token'    =>  str_random(10)
        ]);

        User::create([
            'username'          =>  'Johan',
            'email'             =>  'Johan@gmail.com',
            'password'          =>  Hash::make('1234'),
            'remember_token'    =>  str_random(10)
        ]);
    }
}
