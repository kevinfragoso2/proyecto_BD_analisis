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
        <h2 class= "font-popp text-5xl text-center">Ingrese sus datos</h2>
        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">Cédula</p>
                        <section class= "h-8 flex justify-between">
                            <select class="shadow-xl font-mont text-center border-b-2 border-b-yellow-950">
                                <option value="V">V- </option>
                                <option value="E">E- </option>
                                <option value="J">J- </option>
                            </select>
                            <input type="number" name="cedula_cliente" id="cedula_cliente" autofocus placeholder="..." class="mb-4 w-30 h-8 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
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

        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">Teléfono</p>
                        <section class= "h-8 flex justify-between">
                            <select class="shadow-xl font-mont text-center border-b-2 border-b-yellow-950">
                                <option value="Venezuela">Venezuela (+58)</option>
                                <option value="Chile">Chile (+56)</option>
                                <option value="Colombia">Colombia (+57)</option>
                                <option value="Brasil">Brasil (+55)</option>
                                <option value="EEUU">EEUU (+1)</option>
                            </select>
                            <input type="number" name="celular_cliente" id="celular_cliente" placeholder="..." class="mb-4 w-30 h-8 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl p-1">Email</p>
                        <input type="email" name="correo_cliente" id="correo_cliente" placeholder="..." class="mb-4 w-80 h-8 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                    </section>
                </section>
            </section>
        </section>

        <section class= "md:flex justify-center">
            <section class= "m-4 md:flex justify-between">
                <section class= "mx-8 flex items-center justify-center">
                    <section class= "m-4">
                        <p class= "font-mont font-bold text-xl">Los comensales son</p>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_bebe" id="si_bebe"/><p class="font-mont m-2">Bebé</p>
                            <input type="number" name="cantidad_bebe" id="cantidad_bebe" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_nino" id="si_nino"/><p class="font-mont m-2">Niño y/o niña</p>
                            <input type="number" name="cantidad_nino" id="cantidad_nino" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_adolescente" id="si_adolescente"/><p class="font-mont m-2">Adolescente</p>
                            <input type="number" name="cantidad_adolescente" id="cantidad_adolescente" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_adulto" id="si_adulto"/><p class="font-mont m-2">Adulto</p>
                            <input type="number" name="cantidad_adulto" id="cantidad_adulto" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_anciano" id="si_anciano"/><p class="font-mont m-2">Adulto mayor</p>
                            <input type="number" name="cantidad_anciano" id="cantidad_anciano" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_discapacidad" id="si_discapacidad"/><p class="font-mont m-2">Persona con discapacidad</p>
                            <input type="number" name="cantidad_discapacidad" id="cantidad_discapacidad" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_sillaruedas" id="si_sillaruedas"/><p class="font-mont m-2">Persona en silla de ruedas</p>
                            <input type="number" name="cantidad_sillaruedas" id="cantidad_sillaruedas" placeholder="Cantidad" class="mb-4 mt-2 w-40 shadow-xl font-mont text-center border-b-2 border-b-yellow-950"/>
                        </section>
                        <section class= "flex items-center justify-between">
                            <input type="checkbox" name="si_otro" id="si_otro"/><p class="font-mont m-2">Otro</p>
                            <textarea name="otro_especificar_comensal" id="otro_especificar_comensal" placeholder="Especificar" class="mb-4 p-1 w-60 h-8 shadow-xl font-mont border-b-2 border-b-yellow-950"></textarea>
                        </section>
                    </section>
                </section>

                <section class= "flex items-center justify-center">
                    <section>
                        <p class= "font-mont font-bold text-xl">¿Alguno de los comensales posee<br>una intolerancia y/o alergia?</p>
                        <textarea name="alergias" id="alergias" placeholder="Especificar" class="mb-4 p-2 w-96 shadow-xl font-mont border-b-2 border-b-yellow-950"></textarea>
                    </section>
                </section>

                <section class= "my-4 mx-8 flex items-center justify-center">
                    
                </section>
            </section>
        </section>
        
        

        <section class= "mb-10 flex justify-center">
            <button type="submit" class= "py-2 px-10 bg-black border-b-2 border-black rounded-full font-mont font-bold text-white mt-4 hover:bg-white hover:text-black hover:border-2 hover:border-black">RESERVAR</button>
        </section>
    </form>

@endsection