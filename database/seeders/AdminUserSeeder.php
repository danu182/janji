<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make(123),
            'NIK'=>'123456789',
            'NIP'=>'00001',
            'name'=>'admin',
            'birth_date'=>('2001-10-01'),
            'jabatan'=>'admin',
            'HP'=>'091231232131',
            'type'=>'2',
        ]);
    }
}
