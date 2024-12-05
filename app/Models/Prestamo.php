<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public function socio(){
        return $this->belongsTo(Socio::class);
    }

    public function ejemplares(){
        return $this->belongsToMany(Ejemplar::class);
    }
    /** @use HasFactory<\Database\Factories\PrestamoFactory> */
    use HasFactory;
}
