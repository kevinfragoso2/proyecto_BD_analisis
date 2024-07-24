@extends('header_footer.header_footer_A')

@section('content_asignar')

    <h2 class= "font-popp mt-10 mb-4 text-5xl text-center">Reservaciones</h2>
    <section class= "border-2 border-gray-600 mx-10 mb-1 p-2 rounded">
        <section class="">
            
            <section class= "flex items-center ">
                <h2 class= "font-mont font-bold text-gray-700 text-3xl pl-10 sm:mr-40 lg:mr-60">Reservación #1</h2>
                <p class= "font-mont text-xl pr-2 lg:ml-80 lg:pl-80">Fecha actual</p>
            </section>
            
            <section class="text-center mt-5 flex justify-center">
                
                <table id="tablaAsignacion" class="table-fixed m-auto">
                    <tr class="font-mont text-xl border-b-2 border-black">
                        <th class="px-2">Fecha</th>
                        <th class="px-2">Hora</th>
                        <th class="px-2">Salón</th>
                        <th class="px-2">Mesa(s)</th>
                        <th class="px-2">Nombre</th>
                        <th class="px-2">Apellido</th>
                        <th class="px-2">Teléfono</th>
                        <th class="px-2">Correo</th>
                        <th class="px-2">Acompañante(s)</th>
                        <th class="px-2">Más información</th>
                    </tr>
                    <tr>
                        <td class="p-2">22-07-2024</td>
                        <td class="p-2">20:14</td>
                        <td class="p-2">dorado</td>
                        <td class="p-2">4</td>
                        <td class="p-2">Hannah</td>
                        <td class="p-2">Bahng</td>
                        <td class="p-2">04127777777</td>
                        <td class="p-2">hannahbahng22@gmail.com</td>
                        <td class="p-2">12</td>
                        <td class="p-2">Sin alergias almentarias</td>
                    </tr>
                </table>                  
            </section>

            <section class= "flex justify-center">
                <input type="submit" value="ACEPTAR" class= "py-2 px-5 bg-black border-2 border-black rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black"/>
                <input type="submit" value="DENEGAR" class= "py-2 px-5 bg-black border-2 border-black rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black"/>
                <input type="submit" value="MODIFICAR" class= "py-2 px-5 bg-black border-2 border-black rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black"/>
            </section>

        </section>
    </section>

@endsection