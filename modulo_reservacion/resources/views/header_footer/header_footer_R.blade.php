<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Reservas</title>
    </head>
    
    <body class= "">
        <section class= "text-center">
            <section class="w-full block flex-grow sm:flex justify-between bg-amber-400 p-4 text-white font-bold">
                <section>
                    <h1 class="m-2 font-allu text-4xl md:text-5xl">Restaurante</h1>
                </section>

                <section class= "flex justify-center">
                    <section class="flex justify-between">
                        <section class="text-lg font-mont m-2 w-30 p-2 rounded hover:bg-amber-200 hover:text-amber-900">
                            Reservar
                        </section>
                        <section class="text-lg font-mont m-2 w-20 p-2 rounded hover:bg-amber-200 hover:text-amber-900">
                            Asignar
                        </section>
                    </section>
                </section>
            </section>            
        </section>
        
        <section class= "h-80 md:h-96 flex items-center bg-center bg-cover bg-blend-overlay bg-black/40 text-white" style="background-image: url('https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <section class= "text-center mx-auto">
                <h2 class= "text-4xl md:text-5xl font-mont">Reservar en el</h2>
                <h1 class= "text-7xl md:text-9xl font-allu mt-2">Restaurante</h1>
                <!--<button class= "py-3 px-8 border-2 border-white rounded-full font-mont font-bold text-white mt-4 hover:bg-white/40">RESERVAR</button>-->
            </section>
        </section>

        @yield('content')

        <section class= "h-40 flex items-center bg-center bg-cover bg-blend-overlay bg-black/60 text-white" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <section class= "text-center mx-auto">
                <h2 class= "text-4xl md:text-6xl font-allu mt-2">Regálate una experiencia inolvidable</h2>
            </section>
        </section>

        <section class= "text-center">
            <section class="flex justify-center bg-amber-400 p-4 text-white">
                <section>
                    <h4 class="m-2 font-mont text-l md:text-2xl">Copyright © 2024 Restaurante | Todos los derechos reservados</h1>
                </section>
            </section>            
        </section>

    </body>
</html>