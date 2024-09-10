<?php

namespace App\Http\Controllers;

use App\Models\Asignar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AsignarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos=DB::select(" 
            SELECT C.direccion AS direccion, R.idReservaciones AS idReservaciones, 
            DATE_FORMAT(R.fecha_actual, '%Y-%m-%d') AS fecha_actual, 
            DATE_FORMAT(R.fecha_reservacion, '%Y-%m-%d') AS fecha_reservacion, 
            TIME_FORMAT(R.hora_reservacion, '%H:%i') AS hora_reservacion, 
            ES.idEspacios AS idEspacios, ES.nombre AS salon, RhES.cantidad_mesas AS cantidad_mesas, 
            P.idPersonas AS idPersonas, P.cedula AS cedula, P.nombre AS nombre_persona, 
            P.apellido AS apellido_persona, P.telefono AS telefono, 
            P.correo AS correo, DATE_FORMAT(P.fecha_nacimiento, '%Y-%m-%d') AS fecha_nacimiento,  
            R.num_personas AS comensales, R.informacion AS informacion
            FROM reservaciones R
            JOIN clientes C ON R.Clientes_idClientes = C.idClientes
            JOIN empleados EM ON R.Empleados_idEmpleados = EM.idEmpleados
            JOIN reservaciones_has_espacios RhES ON R.idReservaciones = RhES.Reservaciones_idReservaciones
            JOIN espacios ES ON ES.idEspacios = RhES.Espacios_idEspacios
            JOIN salones S ON S.Espacios_idEspacios = ES.idEspacios
            JOIN mesas M ON M.Salones_idSalones = S.idSalones
            JOIN personas P ON P.idPersonas = C.Personas_idPersonas;
        "); 
        return view("asignaciones.asignar")->with("datos", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        DB::beginTransaction();

        try {
            // UPDATE reservaciones
            DB::update("
                UPDATE reservaciones SET fecha_reservacion = ?, hora_reservacion = ? WHERE idReservaciones = ?",
                [
                    $request->fecha_reserva,
                    $request->hora_reserva,
                    $request->idReservaciones
                ]
            );

            // UPDATE reservaciones_has_espacios
            DB::update("
                UPDATE reservaciones_has_espacios SET Espacios_idEspacios = ?, cantidad_mesas = ? WHERE Reservaciones_idReservaciones = ?",
                [
                    $request->salon,
                    $request->cantidad_mesas,
                    $request->idReservaciones
                ]
            );

            DB::commit();
            return redirect('/asignar')->with('correcto', '¡Reserva actualizada!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Error al actualizar: " . $e->getMessage());
            return redirect('/asignar')->with('error', 'Ocurrió un error:c: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignar $asignar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignar $asignar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignar $asignar)
    {
        //
    }
}
