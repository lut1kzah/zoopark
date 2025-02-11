<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
    ];
    public function animals(){
        return $this->hasMany(Animal::class);
    }
}
