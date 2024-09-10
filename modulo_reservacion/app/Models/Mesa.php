<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $table = 'mesas';
    protected $primaryKey = 'idMesas';
    protected $fillable = ['numero_mesa', 'capacidad_personas', 'disponibilidad', 'Salones_idSalones'];
    public $timestamps = false;
}

