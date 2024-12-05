<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    public function prestamos(){
        return $this->hasMany(Prestamo::class);
    }
    /** @use HasFactory<\Database\Factories\SocioFactory> */
    use HasFactory;
}
