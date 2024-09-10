<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionesHasEspacios extends Model
{
    use HasFactory;

    protected $table = 'reservaciones_has_espacios';
    protected $primaryKey = 'idReservaciones_has_Espacios';
    protected $fillable = ['Reservaciones_idReservaciones', 'Espacios_idEspacios'];
    public $timestamps = false;


    public function Reservar()
    {
        return $this->belongsTo(Reservar::class, 'Reservaciones_idReservaciones', 'idReservaciones');
    }

    public function Espacio()
    {
        return $this->belongsTo(Espacio::class, 'Espacios_idEspacios', 'idEspacios');
    }
}