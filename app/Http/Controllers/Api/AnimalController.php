<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all(); // Получаем всех животных из базы
        return view('animals.index', compact('animals')); // Передаем данные в представление
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id); // Находим животное по ID
        return view('animals.show', compact('animal')); // Передаем данные в представление
    }
}
