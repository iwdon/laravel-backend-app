<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * run the database seeds.
     */
    public function run(): void
    {
       User::factory(20)->create();
       User::create([
        'name'=>'dwi arifianto',
        'email'=>'dwiarif@gmail.com',
        'email_verified_at'=> now(),
        'role'=>'admin',
        'phone'=>'08985747022',
        'bio'=>'flutter laravel',
        'password' =>Hash::make('123456',)
       ]);

       User::create([
        'name'=>'Super Admin',
        'email'=>'superadmin@gmail.com',
        'email_verified_at'=> now(),
        'role'=>'superadmin',
        'phone'=>'085227600925',
        'bio'=>'laravel developer',
        'password' =>Hash::make('12345678',)
       ]);
    }
}
