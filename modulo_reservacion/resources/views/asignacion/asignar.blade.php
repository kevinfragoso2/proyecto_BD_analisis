@extends('header_footer.header_footer_A')

@section('content_asignar')

    <h2 class= "font-popp mt-10 mb-4 text-5xl text-center">Reservaciones</h2>
    <section class= "lg:grid grid-cols-2">
        <section class= "flex justify-center">
            <section class="bg-gray-50 border-2 border-gray-600 m-4 p-4 rounded shadow-xl">
                <h2 class= "font-mont font-bold  text-gray-700 text-3xl text-center">Reservación #1</h2>
                <h3 class= "font-popp font-bold  text-gray-700 text-3xl">Datos de la reservación</h3>
                <section class= "mb-4 grid grid-cols-2">
                    <section>
                        <p class= "font-mont font-semibold text-xl">Fecha: </p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                    </section>
                </section>
                
                <section class= "mb-4 grid grid-cols-6">
                    <section>
                        <p class= "font-mont font-semibold text-xl">Salón:</p>
                        <p class= "font-mont font-semibold text-xl">Mesa(s):</p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                        <p class= "font-mont text-xl"></p>
                    </section>
                    <section>
                        <p class= "font-mont font-semibold text-xl">Personas:</p>
                        <p class= "font-mont font-semibold text-xl">Hora:</p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                        <p class= "font-mont text-xl"></p>
                    </section>
                    <section>
                        <p class= "font-mont font-semibold text-xl">Alergias:</p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                    </section>
                </section>

                <h3 class= "font-popp font-bold  text-gray-700 text-3xl">Datos del comensal</h3>
                <section class= "grid grid-cols-4">
                    <section>
                        <p class= "font-mont font-semibold text-xl">Nombre:</p>
                        <p class= "font-mont font-semibold text-xl">Apellido:</p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                        <p class= "font-mont text-xl"></p>
                    </section>
                    <section>
                        <p class= "font-mont font-semibold text-xl">Teléfono:</p>
                        <p class= "font-mont font-semibold text-xl">Email:</p>
                    </section>
                    <section>
                        <p class= "font-mont text-xl"></p>
                        <p class= "font-mont text-xl"></p>
                    </section>
                </section>

                <section class= "flex justify-center">
                    <button type="submit" class= "py-2 px-20 bg-emerald-500 border-2 border-emerald-500 rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-emerald-500 hover:border-2 hover:border-emerald-500">ACEPTAR</button>
                    <button type="submit" class= "py-2 px-20 bg-rose-500 border-2 border-rose-500 rounded-full font-mont font-bold text-white mx-4 mt-4 hover:bg-white hover:text-rose-500 hover:border-2 hover:border-rose-500">DENEGAR</button>
                </section>
            </section>
        </section>
    </section>

@endsection