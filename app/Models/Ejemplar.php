<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    protected $table = 'ejemplares';
    protected $fillable = ['libro_id'];

    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    public function prestamos(){
        return $this->belongsToMany(Prestamo::class);
    }
    /** @use HasFactory<\Database\Factories\EjemplarFactory> */
    use HasFactory;
}
