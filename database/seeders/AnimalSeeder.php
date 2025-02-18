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
            'species' => 'Лев',
            'description' => 'Крупное хищное животное семейства кошачьих.',
            'habitat' => 'Африка',
        ]);

        Animal::create([
            'species' => 'Пингвин',
            'description' => 'Нелетающая птица, обитающая в холодных регионах.',
            'habitat' => 'Антарктида',
        ]);
    }
}
