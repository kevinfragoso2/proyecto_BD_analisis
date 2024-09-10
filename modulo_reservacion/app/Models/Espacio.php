<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $table = 'espacios';
    protected $primaryKey = 'idEspacios';
    protected $fillable = ['nombre', 'capacidad_personas', 'ubicacion_restaurante', 'disponibilidad'];
    public $timestamps = false;


    public function ReservacionesHasEspacios()
    {
        return $this->hasMany(ReservacionesHasEspacios::class, 'Espacios_idEspacios', 'idEspacios');
    }
}
