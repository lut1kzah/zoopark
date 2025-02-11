<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('code', 'admin')->first();
        $role_user = Role::where('code', 'user')->first();
        $role_manager = Role::where('code', 'user')->first();
        User::create([
            'name' => 'Артур',
            'email' => 'balbesss@mail.ru',
            'password' => 'noway',
            'api_token' => null,
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'name' => 'Максик',
            'email' => 'balda@mail.ru',
            'password' => 'noway',
            'api_token' => null,
            'role_id' => $role_user->id,
        ]);
        User::create([
            'name' => 'Мопсик',
            'email' => 'baldarez@mail.ru',
            'password' => 'noway',
            'api_token' => null,
            'role_id' => $role_manager->id,
        ]);
    }
}
