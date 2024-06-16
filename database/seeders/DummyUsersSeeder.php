<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
        [
            'name'=>'user1',
            'email'=>'user@gmail.com',
            'role'=>'user',
            'password'=> bcrypt('user123')
        ],
        [
            'name'=>'admin1',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=> bcrypt('admin123')
        ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}