@extends('header_footer.asignaciones')

@section('content_asignar')
    
    <section class="p-3">
        <h2 class= "font-popp mt-10 mb-4 text-5xl text-center">Reservaciones</h2>
        @if(session('correcto'))
            <div class="bg-green-500 font-mont text-white p-4 m-1 rounded-lg">
                {{ session('correcto') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500 font-mont text-white p-4 m-1 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        @foreach ($datos as $item)
            <section class= "border-2 border-gray-600 mx-10 mb-10 p-2 rounded">
                <section class="">
                    <section class= "flex items-center">
                        <h2 class= "font-mont font-bold text-gray-700 text-3xl pl-10 sm:mr-40 lg:mr-60">Reservación {{$item -> idReservaciones}} </h2>
                        <p class= "font-mont text-xl pr-2 lg:ml-80 lg:pl-80"> {{$item -> fecha_actual}} </p>
                    </section>
                    
                    <section class="text-center mt-5 flex justify-center">
                        
                        <table id="tablaAsignacion" class="table-fixed m-auto">
                            <thead>
                                <tr class="font-mont text-xl border-b-2 border-black">
                                    <th class="px-2">Fecha</th>
                                    <th class="px-2">Hora</th>
                                    <th class="px-2">Salón</th>
                                    <th class="px-2">Mesas</th>
                                    <th class="px-2">Cédula</th>
                                    <th class="px-2">Nombre</th>
                                    <th class="px-2">Apellido</th>
                                    <th class="px-2">Teléfono</th>
                                    <th class="px-2">Correo</th>
                                    <th class="px-2">Comensales</th>
                                    <th class="px-2">Más información</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="p-2"> {{$item -> fecha_reservacion}} </td>
                                    <td class="p-2"> {{$item -> hora_reservacion}} </td>
                                    <td class="p-2"> {{$item -> salon}} </td>
                                    <td class="p-2"> {{$item -> cantidad_mesas}} </td>
                                    <td class="p-2"> {{$item -> cedula}} </td>
                                    <td class="p-2"> {{$item -> nombre_persona}} </td>
                                    <td class="p-2"> {{$item -> apellido_persona}} </td>
                                    <td class="p-2"> {{$item -> telefono}} </td>
                                    <td class="p-2"> {{$item -> correo}} </td>
                                    <td class="p-2"> {{$item -> comensales}} </td>
                                    <td class="p-2"> {{$item -> informacion}} </td>
                                </tr> 
                                
                                
                            </tbody>
                            
                        </table>                  
                    </section>

                    <section class= "flex justify-center">
                        <input type="submit" value="CANCELAR" class= "py-2 px-5 bg-black border-2 border-black rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black"/>
                        <button onclick="openModal({{$item -> idReservaciones}})" class="py-2 px-5 bg-black border-2 border-black rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">MODIFICAR</button>           
                    </section>
                    
                </section>
            </section>

            <!-- MODIFICAR RESERVA -->
            <section id="modificarAsigna{{$item -> idReservaciones}}" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <section class="bg-black bg-opacity-50 flex items-center justify-center min-h-screen">
                    <section class="bg-white rounded-lg p-6 max-w-4xl w-full shadow-lg border-2 border-slate-100">
                        <section class="flex justify-between items-center mb-6">
                            <h2 class="font-popp text-4xl text-center">Modificar reserva</h2>
                            <button onclick="closeModal({{$item -> idReservaciones}})" class="text-gray-500 hover:text-gray-700">
                                ✖
                            </button>
                        </section>

                        <form action="{{route("asignar.update", $item -> idReservaciones)}}" method="post">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="idReservaciones" value="{{$item -> idReservaciones}}">
                            <section class="mb-4">
                                <section class="flex justify-center items-center">
                                    <section class="m-4">
                                        <p class= "font-mont text-base">Seleccionar salón</p>
                                            <select name="salon" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md">
                                                <option value="{{$item -> idEspacios}}">{{$item -> salon}}</option>
                                                <option value="1">Rosado</option>
                                                <option value="2">Dorado</option>
                                                <option value="3">Azul</option>
                                            </select>
                                    </section>

                                    <section class="m-4">
                                        <p class= "font-mont text-base">Cantidad de mesas</p>
                                            <input type="number" value="{{$item -> cantidad_mesas}}" name="cantidad_mesas" id="cantidad_mesas" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>
                                </section>

                                <section class="flex justify-center items-center">
                                    <section class="m-4">
                                        <p class= "font-mont text-base">Día</p>
                                        <input type="date" value="{{$item -> fecha_reservacion}}" name="fecha_reserva" id="fecha_reserva" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section class="m-4">
                                        <p class= "font-mont text-base">Hora</p>
                                        <input type="time" value="{{$item -> hora_reservacion}}" name="hora_reserva" id="hora_reserva" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    
                                </section>


                                <section class="flex justify-center">
                                    <button type="button" onclick="closeModal({{$item -> idReservaciones}})" class="py-2 px-10 bg-black border-b-2 border-black rounded-full font-mont font-bold text-white mt-4 mx-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">CANCELAR</button>
                                    <button type="submit" class="py-2 px-10 bg-black border-b-2 border-black rounded-full font-mont font-bold text-white mt-4 mx-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">GUARDAR CAMBIOS</button>
                                </section>
                            </section>
                        </form>
                        
                    </section>
                </section>
            </section>

            <script>
            function openModal(idReservaciones) {
                document.getElementById('modificarAsigna' + idReservaciones).classList.remove('hidden');
            }

            function closeModal(idReservaciones) {
                document.getElementById('modificarAsigna' + idReservaciones).classList.add('hidden');
            }
            </script>


        @endforeach
    </section>

    

@endsection