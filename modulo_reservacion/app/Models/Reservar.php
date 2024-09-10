<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservar extends Model
{
    use HasFactory;

    protected $table = 'reservaciones';
    protected $primaryKey = 'idReservaciones';
    protected $fillable = ['fecha_actual', 'fecha_reservacion', 'hora_reservacion', 'num_personas', 'informacion', 'estatus', 'motivo', 'Clientes_id_clientes', 'Empleados_idEmpleados'];
    public $timestamps = false;
    
    
    //Unir tablas
    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'Clientes_idClientes', 'idClientes');
    }

    public function Empleado()
    {
        return $this->belongsTo(Empleado::class, 'Empleados_idEmpleados', 'idEmpleados');
    }

    public function Espacio()
    {
        return $this->belongsToMany(Espacio::class, 'reservaciones_has_espacios', 'Reservaciones_idReservaciones', 'Espacios_idEspacios');
    }
    
    /*public function ReservacionesHasEspacios()
    {
        return $this->hasMany(ReservacionesHasEspacios::class, 'Reservaciones_idReservaciones', 'idReservaciones');
    }*/
}