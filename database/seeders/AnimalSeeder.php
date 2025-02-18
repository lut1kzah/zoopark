<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'name' => 'Лев',
            'description' => 'Крупное хищное животное семейства кошачьих.',
            'continent' => 'Африка',
        ]);

        Animal::create([
            'name' => 'Пингвин',
            'description' => 'Нелетающая птица, обитающая в холодных регионах.',
            'continent' => 'Антарктида',
        ]);
    }
}
