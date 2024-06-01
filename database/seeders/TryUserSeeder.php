<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name' => 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=>'admin'
            ],
            [
                'name' => 'Afrizal Hanif',
                'email'=> 'maha@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=>'dokter'
            ],
            [
                'name' => 'Helmi Apriando',
                'email'=> 'helmi@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=>'mahasiswa'
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
