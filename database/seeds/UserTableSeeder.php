<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel',
            'email' => 'd4ni3L_15@hotmail.com',
            'password' => Hash::make('123')
        ]);

        User::create([
            'name' => 'Emilio',
            'email' => 'blgoear@hotmail.com',
            'password' => Hash::make('indal')
        ]);

    }
}
