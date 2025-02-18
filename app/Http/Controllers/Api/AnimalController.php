<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Получить список всех животных
    public function index()
    {
        $animals = Animal::all();
        return response()->json($animals); // Возвращаем данные в формате JSON
    }

    // Получить информацию о конкретном животном
    public function show($id)
    {
        $animal = Animal::find($id);

        if (!$animal) {
            return response()->json(['message' => 'Животное не найдено'], 404); // Если животное не найдено
        }

        return response()->json($animal); // Возвращаем данные в формате JSON
    }
}
