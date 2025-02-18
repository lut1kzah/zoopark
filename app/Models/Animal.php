<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'description',
        'continent',
    ];
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
