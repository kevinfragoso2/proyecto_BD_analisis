<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $primaryKey = 'idPersonas';
    protected $fillable = ['cedula', 'nombre', 'apellido', 'fecha_nacimiento', 'correo', 'telefono'];
    public $timestamps = false;


    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'Personas_idPersonas', 'idPersonas');
    }
}


