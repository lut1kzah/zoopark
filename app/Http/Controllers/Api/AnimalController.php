<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(AnimalRequest $request) // Используем StoreAnimalRequest
    {
        $data = $request->validated(); // Получаем валидированные данные

        // Если загружено фото, сохраняем его
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/animals'); // Сохраняем в storage/app/public/animals
            $data['photo'] = Storage::url($path); // Сохраняем публичный URL
        }

        $animal = Animal::create($data);

        return response()->json($animal, 201); // Возвращаем созданное животное
    }
}
