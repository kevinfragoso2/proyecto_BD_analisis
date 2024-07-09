@extends('header_footer.header_footer_R')

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

    <form action="#" method="post">
        <h2 class= "font-popp text-5xl text-center">Haz tu reserva</h2>
        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Día a reservar</p>
                        <input type="date" name="fecha_reserva" id="fecha_reserva" autofocus class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Personas</p>
                        <input type="number" name="cantidad_personas" id="cantidad_personas" class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Hora</p>
                        <input type="time" name="hora_reserva" id="hora_reserva" class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>
        
        <section class="md:flex justify-center">
            <section class= "lg:flex justify-between">
                <section class= "m-2 md:flex justify-beetwen">
                    <section class= "m-4 flex justify-center">
                        <section class="w-126 h-96 bg-center bg-cover bg-blend-overlay" style="background-image: url('https://elcierzo.com/wp-content/uploads/2020/08/salon-restaurante-el-cierzo-0011-1024x768.jpg')"></section>
                    </section>
                    
                    <section class="m-4 flex justify-center">
                        <section>
                            <p class= "font-mont font-bold text-xl">Seleccionar salón</p>
                            <select class="w-48 shadow-xl font-mont text-center border-2 border-b-yellow-950">
                                <option value="#"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </section>
                    </section>
                </section>
            </section>

            <section class= "md:flex justify-center">
                <section class= "m-2 md:flex justify-beetwen">
                    <section class= "m-4 flex justify-center">
                        <section class="w-126 h-96 bg-center bg-cover bg-blend-overlay" style="background-image: url('https://elcierzo.com/wp-content/uploads/2020/08/salon-restaurante-el-cierzo-0009-1024x768.jpg')"></section>
                    </section>
                    
                    <section class="m-4 flex justify-center">
                        <section>
                            <p class= "font-mont font-bold text-xl">Seleccionar mesa</p>
                            <select class="w-48 shadow-xl font-mont text-center border-2 border-b-yellow-950">
                                <option value="#"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        

        <section class= "mb-9 flex justify-center">
            <button type="submit" class= "py-2 px-20 bg-black border-2 border-black rounded-full font-mont font-bold text-white mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">SIGUIENTE</button>
        </section>

    </form>

@endsection