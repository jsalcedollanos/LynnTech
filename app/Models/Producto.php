<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo','nombre', 'descripcion','etiqueta','color','valor','descuento','cantidad','categoria','imagen','imagenGrande'
    ];
}
