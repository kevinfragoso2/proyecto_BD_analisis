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
                        <p class= "font-mont font-bold text-xl">Nombre</p>
                        <input type="text" name="nombre_cliente" id="nombre_cliente" autofocus class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Apellido</p>
                        <input type="text" name="apellido_cliente" id="apellido_cliente" class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Email</p>
                        <input type="email" name="correo_cliente" id="correo_cliente" class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>

        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">Teléfono</p>
                        <section class= "h-8 flex justify-between">
                            <select class="shadow-xl font-mont text-center border-2 border-b-yellow-950">
                                <option value="Venezuela">Venezuela (+58)</option>
                                <option value="Chile">Chile (+56)</option>
                                <option value="Colombia">Colombia (+57)</option>
                                <option value="Brasil">Brasil (+55)</option>
                                <option value="EEUU">EEUU (+1)</option>
                            </select>
                            <input type="number" name="nombre_cliente" id="nombre_cliente" autofocus class="mb-4 w-30 h-8 shadow-xl font-mont text-center border-2 border-b-yellow-950"/>
                        </section>
                        
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">¿Tiene algún comensal alguna intolerancia/alergia?</p>
                        <section>
                            <section class= "flex justify-right">
                                <section class= "flex justify-between mx-4">
                                    <input type="radio" name="si_alergia" id="si_alergia"/><p class="font-mont m-2">Si</p>
                                </section>
                                <section class= "flex justify-between mx-4">
                                    <input type="radio" name="no_alergia" id="no_alergia"/><p class="font-mont m-2">No</p>
                                </section>
                            </section>
                        </section>                        
                    </section>
                </section>
            </section>
        </section>
        
        <section class= "my-4 mx-8 flex items-center justify-center">
            <section>
                <p class= "font-mont font-bold text-xl">Alérgenos</p>
                <textarea name="alergias" id="alergias" class="mb-4 w-80 shadow-xl font-mont text-center border-2 border-b-yellow-950"></textarea>
            </section>
        </section>

        <section class= "mb-9 flex justify-center">
            <button type="submit" class= "py-2 px-20 bg-black border-2 border-black rounded-full font-mont font-bold text-white mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">RESERVAR</button>
        </section>
    </form>

@endsection