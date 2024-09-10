@extends('header_footer.reservaciones')

@section('content')

    <section>
        <section class= "mt-6 mb-10 flex items-center justify-center">
            <section>
                <h2 class= "mt-4 mb-4 font-popp text-5xl text-center">Espacios</h2>
                <section class="w-96 md:w-128 bg-center bg-cover bg-blend-overlay h-80 border-x-8 border-white" style="background-image: url('https://elcierzo.com/wp-content/uploads/2020/08/salon-restaurante-el-cierzo-0010-1024x514.jpg')">
                </section>
            </section>
        </section>
    </section>

    <form action="{{route("reservar.store")}}" method="post">
        @csrf
        <h2 class= "font-popp text-5xl text-center">Comience a reservar</h2>

        <section class= "my-4 mx-8 flex items-center justify-center">
            <section>
                <p class= "font-mont font-bold text-xl p-1">Cantidad de personas</p>
                <input type="number" name="cantidad_personas" id="cantidad_personas" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
            </section>
        </section>
        <section class="md:flex justify-center">
            <section class= "lg:flex justify-between">
                <section class= "m-2 md:flex justify-beetwen">
                    <section class= "m-4 flex justify-center">
                        <section class="w-126 h-80 bg-center bg-cover bg-blend-overlay" style="background-image: url('https://elcierzo.com/wp-content/uploads/2020/08/salon-restaurante-el-cierzo-0011-1024x768.jpg')"></section>
                    </section>
                    
                    <section class="m-4 flex justify-center">
                        <section>
                            <p class= "font-mont font-bold text-xl p-1">Seleccionar salón</p>
                            <select name="salon" class="w-48 shadow-xl font-mont text-center border-b-2 border-b-yellow-950">
                                <option value="1">Rosado</option>
                                <option value="2">Dorado</option>
                                <option value="3">Azul</option>
                            </select>
                        </section>
                    </section>
                </section>
            </section>

            <section class= "md:flex justify-center">
                <section class= "m-2 md:flex justify-beetwen">
                    <section class= "m-4 flex justify-center">
                        <section class="w-126 h-80 bg-center bg-cover bg-blend-overlay" style="background-image: url('https://elcierzo.com/wp-content/uploads/2020/08/salon-restaurante-el-cierzo-0009-1024x768.jpg')"></section>
                    </section>
                    
                    <section class="m-4 flex justify-center">
                        <section>
                            <p class= "font-mont font-bold text-xl p-1">Cantidad de mesas</p>
                            <input type="number" name="cantidad_mesas" id="cantidad_mesas" placeholder="..." class="mb-4 w-48 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class= "mb-10 md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl p-1">Día a reservar</p>
                        <input type="date" name="fecha_reserva" id="fecha_reserva" class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl p-1">Hora</p>
                        <input type="time" name="hora_reserva" id="hora_reserva" class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl p-1">Evento</p>
                        <input type="text" name="evento" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>

        <h2 class= "font-popp text-5xl text-center">Ingrese sus datos</h2>
        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Cédula</p>
                        <input type="number" name="cedula_cliente" id="cedula_cliente" placeholder="..." class="mb-4 w-30 h-8 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Nombre</p>
                        <input type="text" name="nombre_cliente" id="nombre_cliente" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Apellido</p>
                        <input type="text" name="apellido_cliente" id="apellido_cliente" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>

        <section class= "mb-10 md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">Fecha de nacimiento</p>
                        <input type="date" name="fecha_cliente" id="fecha_cliente" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">Teléfono</p>
                        <input type="number" name="celular_cliente" id="celular_cliente" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl p-1">Email</p>
                        <input type="email" name="correo_cliente" id="correo_cliente" placeholder="..." class="mb-4 w-80 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>

        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "mx-4 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl mt-6">Los comensales son...</p>
                        <textarea name="comensales" id="comensales" placeholder="Bebé, persona mayor, persona con discapacidad..." class="mb-4 p-2 w-96 shadow-xl font-mont border-b-2 border-b-yellow-950"></textarea>
                    </section>
                </section>

                <section class= "flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">¿Alguno de los comensales posee<br>una intolerancia y/o alergia?</p>
                        <textarea name="alergias" id="alergias" placeholder="Especificar" class="mb-4 p-2 w-96 shadow-xl font-mont border-b-2 border-b-yellow-950"></textarea>
                    </section>
                </section>

                <section class= "flex items-center justify-center">
                    <section class= "m-4">
                        <section class= "mx-8 flex items-baseline">
                            <p class= "font-mont font-bold text-xl p-1">Dirección <p class="font-mont text-xs text-gray-700"> (opcional)</p></p>
                        </section>
                        <textarea name="direccion_cliente" id="direccion_cliente" placeholder="..." class="p-1 mb-4 w-96 h-20 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"></textarea>
                    </section>
                </section>
            </section>
        </section>
        

        <section class= "mb-10 flex justify-center">
            <button type="submit" class="py-2 px-10 bg-black border-b-2 border-black rounded-full font-mont font-bold text-white mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">RESERVAR</button>
        </section>

    </form>


    
<!-- Lista de Reservaciones -->   
    <section class="p-3 mt-32 bg-slate-50">
        <h2 class= "font-popp mt-10 mb-4 text-5xl text-center">Mis reservaciones</h2>
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


            <!-- MODIFICAR ASIGNACIÓN -->
            <section id="modificarReserva{{$item -> idReservaciones}}" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <section class="bg-black bg-opacity-50 flex items-center justify-center min-h-screen">
                    <section class="bg-white rounded-lg p-6 max-w-7xl w-full shadow-lg border-2 border-slate-100">
                        <section class="flex justify-between items-center mb-6">
                            <h2 class="font-popp text-4xl text-center">Modificar reserva</h2>
                            <button onclick="closeModal({{$item -> idReservaciones}})" class="text-gray-500 hover:text-gray-700">
                                ✖
                            </button>
                        </section>

                        <form action="{{route("reservar.update", $item -> idReservaciones)}}" method="post">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="idReservaciones" value="{{$item -> idReservaciones}}">
                            <input type="hidden" name="idReservaciones_has_Espacios" value="{{$item -> idReservaciones_has_Espacios}}">
                            <section class="mb-4">
                                <section class="flex justify-between items-center">
                                    <section class="">
                                        <p class= "font-mont text-base">Cantidad de personas</p>
                                        <input type="number" value="{{$item -> comensales}}" name="cantidad_personas" id="cantidad_personas" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Seleccionar salón</p>
                                        <select name="salon" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md">
                                            <option value="{{$item -> idEspacios}}">{{$item -> salon}}</option>
                                            <option value="1">Rosado</option>
                                            <option value="2">Dorado</option>
                                            <option value="3">Azul</option>
                                        </select>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Cantidad de mesas</p>
                                        <input type="number" value="{{$item -> cantidad_mesas}}" name="cantidad_mesas" id="cantidad_mesas" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>
                                </section>

                                <section class="flex justify-center items-center">
                                    <section class="mt-4 mx-10">
                                        <p class= "font-mont text-base">Día</p>
                                        <input type="date" value="{{$item -> fecha_reservacion}}" name="fecha_reserva" id="fecha_reserva" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section class="mt-4 mx-10">
                                        <p class= "font-mont text-base">Hora</p>
                                        <input type="time" value="{{$item -> hora_reservacion}}" name="hora_reserva" id="hora_reserva" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>
                                </section>

                                <h3 class="mt-5 font-popp text-2xl text-center">Modificar datos</h3>
                                <section class="flex justify-between items-center">
                                    <input type="hidden" name="idPersonas" value="{{$item -> idPersonas}}">
                                    <section class="">
                                        <p class= "font-mont text-base">Cédula</p>
                                        <input type="number" value="{{$item -> cedula}}" name="cedula_cliente" id="cedula_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Nombre</p>
                                        <input type="text" value="{{$item -> nombre_persona}}" name="nombre_cliente" id="nombre_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Apellido</p>
                                        <input type="text" value="{{$item -> apellido_persona}}" name="apellido_cliente" id="apellido_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>
                                </section>

                                <section class="flex justify-between items-center">
                                    <section class="mt-4">
                                        <p class= "font-mont text-base">Fecha de nacimiento</p>
                                        <input type="date" value="{{$item -> fecha_nacimiento}}" name="fecha_cliente" id="fecha_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Teléfono</p>
                                        <input type="number" value="{{$item -> telefono}}" name="celular_cliente" id="celular_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>

                                    <section>
                                        <p class= "font-mont text-base">Email</p>
                                        <input type="email" value="{{$item -> correo}}" name="correo_cliente" id="correo_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md"/>
                                    </section>
                                </section>

                                <section class="flex justify-center items-center">
                                    <section class="mt-4 mx-10">
                                        <p class= "font-mont text-base">Más información</p>
                                        <textarea name="informacion" id="informacion" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md">{{$item->informacion}}</textarea>

                                    </section>

                                    <section class="mt-4 mx-10">
                                        <p class= "font-mont text-base">Dirección <p class="font-mont text-xs text-gray-700"> (opcional)</p></p>
                                        <textarea name="direccion_cliente" id="direccion_cliente" class="mb-4 p-2 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950 rounded-md">{{$item -> direccion}}</textarea>

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
                document.getElementById('modificarReserva' + idReservaciones).classList.remove('hidden');
            }

            function closeModal(idReservaciones) {
                document.getElementById('modificarReserva' + idReservaciones).classList.add('hidden');
            }
            </script>


        @endforeach
    </section>
        
    

@endsection