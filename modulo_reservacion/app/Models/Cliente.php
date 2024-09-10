<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'idClientes';
    protected $fillable = ['direccion', 'Personas_idPersonas'];
    public $timestamps = false;


    public function Persona()
    {
        return $this->hasOne(Persona::class, 'idPersonas', 'Personas_idPersonas');
    }

    public function Reservar()
    {
        return $this->hasMany(Reservar::class, 'Clientes_idClientes', 'idClientes');
    }
}