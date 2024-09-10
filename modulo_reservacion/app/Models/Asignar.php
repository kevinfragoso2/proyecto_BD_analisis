<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignar extends Model
{
    use HasFactory;

    protected $table = 'reservaciones';
    protected $primaryKey = 'idReservaciones';
    protected $fillable = ['fecha_actual', 'fecha_reservacion', 'hora_reservacion', 'num_personas', 'informacion', 'estatus', 'motivo', 'Clientes_id_clientes', 'Empleados_idEmpleados'];
    public $timestamps = false;
}
