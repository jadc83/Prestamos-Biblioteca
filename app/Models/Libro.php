<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function ejemplares(){
        return $this->hasMany(Ejemplar::class);
    }
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;
}
