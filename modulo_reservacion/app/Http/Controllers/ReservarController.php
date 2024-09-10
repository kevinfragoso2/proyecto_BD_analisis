<?php

namespace App\Http\Controllers;

use App\Models\Reservar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ReservarController extends Controller
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
            ES.idEspacios AS idEspacios, ES.nombre AS salon, RhES.cantidad_mesas AS cantidad_mesas, RhES.idReservaciones_has_Espacios AS idReservaciones_has_Espacios, 
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
        return view("reservaciones.reservar")->with("datos", $datos);

        //$datos = Reservar::all();
        //return view('reservaciones.reservar', ['datos' => $datos]); //DEJA ESTEEEEEE
        
        //$datos=DB::select(" select * from reservaciones ");   //ESTE FUNCIONA OK?????!!!!!
        //return view("reservaciones.reservar")->with("datos", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            //INSERT personas
            DB::insert("
                INSERT INTO personas(cedula, nombre, apellido, fecha_nacimiento, correo, telefono)
                VALUES(?, ?, ?, ?, ?, ?)", 
                [
                    $request->cedula_cliente,
                    $request->nombre_cliente,
                    $request->apellido_cliente,
                    $request->fecha_cliente,
                    $request->correo_cliente,
                    $request->celular_cliente
                ]
            );
            $idPersonas = DB::getPdo()->lastInsertId();

            //INSERT clientes
            DB::insert("
                INSERT INTO clientes(direccion, Personas_idPersonas)
                VALUES(?, ?)",
                [
                    $request->direccion_cliente,
                    $idPersonas
                ]
            );
            $idClientes = DB::getPdo()->lastInsertId();
            
            //INSERT reservaciones
            $informacion_reserva = $request->evento . ' ' . $request->comensales . ' ' . $request->alergias;
            DB::insert("
                INSERT INTO reservaciones(fecha_actual, fecha_reservacion, hora_reservacion, num_personas, informacion, estatus, Clientes_idClientes, Empleados_idEmpleados)
                VALUES(NOW(), ?, ?, ?, ?, 1, ?, 1)",
                [
                    $request->fecha_reserva,
                    $request->hora_reserva,
                    $request->cantidad_personas,
                    $informacion_reserva,
                    $idClientes
                ]
            );
            $idReservaciones = DB::getPdo()->lastInsertId();

            //INSERTS reservaciones_has_espacios
            DB::insert("
                INSERT INTO reservaciones_has_espacios(cantidad_mesas, Reservaciones_idReservaciones, Espacios_idEspacios)
                VALUES(?, ?, ?)",
                [
                    $request->cantidad_mesas,
                    $idReservaciones,
                    $request->salon
                ]
            );

            DB::commit();
            return redirect('/reservar');
            //return redirect('/reservar')->with('correctoR', '¡Reserva realizada!');


        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Error al registrar: " . $e->getMessage());
            return response()->json('errorR', 'Ocurrió un error:c: ' . $e->getMessage());
            //return redirect('/reservar')->with('errorR', 'Ocurrió un error:c: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservar $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservar $reservar)
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
            // UPDATE Personas
            $idPersonas = $request->idPersonas;
            DB::update("
                UPDATE personas SET cedula=?, nombre=?, apellido=?, fecha_nacimiento=?, correo=?, telefono=? WHERE idPersonas=? ",
                [
                    $request->cedula_cliente,
                    $request->nombre_cliente,
                    $request->apellido_cliente,
                    $request->fecha_cliente,
                    $request->correo_cliente,
                    $request->celular_cliente,
                    $idPersonas
                ]
            );

            // UPDATE clientes
            DB::update("
                UPDATE clientes SET direccion = ? WHERE Personas_idPersonas = ?",
                [
                    $request->direccion_cliente,
                    $idPersonas
                ]
            );

            // UPDATE reservaciones
            $informacion_reserva = $request->informacion;
            DB::update("
                UPDATE reservaciones SET fecha_reservacion = ?, hora_reservacion = ?, num_personas = ?, informacion = ? WHERE idReservaciones = ?",
                [
                    $request->fecha_reserva,
                    $request->hora_reserva,
                    $request->cantidad_personas,
                    $informacion_reserva,
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
            return redirect('/reservar')->with('correcto', '¡Reserva actualizada!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Error al actualizar: " . $e->getMessage());
            return redirect('/reservar')->with('error', 'Ocurrió un error:c: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservar $reservar)
    {
        //
    }
}
