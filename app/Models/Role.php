<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // relacion con el modelo User 1 a muchos
    // un rol puede tener muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
}