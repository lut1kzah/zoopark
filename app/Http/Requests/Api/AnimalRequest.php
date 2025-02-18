<?php

namespace App\Http\Requests\Api;

use App\Models\Animal;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'continent' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Максимум 2 МБ
        ]);

        $data = $request->all();

        // Если загружено фото, сохраняем его
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/animals'); // Сохраняем в storage/app/public/animals
            $data['photo'] = Storage::url($path); // Сохраняем публичный URL
        }

        $animal = Animal::create($data);

        return response()->json($animal, 201); // Возвращаем созданное животное
    }
}
