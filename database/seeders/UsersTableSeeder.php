<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');

        $data = [
            ['name'=>'Super Admin',    'email'=>'superadmin@gmail.com',  'password'=> $password, 'level' => 'Admin'],
            ['name'=>'Petugas', 'email'=>'petugas@gmail.com', 'password'=> $password, 'level' => 'Petugas'],
        ];

        User::insert($data);
    }
}
