<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        User::truncate();
        User::create([
            'name' => 'karimali',
            'email' => 'karim@yahoo.com',
            'password' => Hash::make('karim@yahoo.com')
        ]);

        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@yahoo.com',
            'password' => Hash::make('ahmed@yahoo.com')
        ]);

    }
}
