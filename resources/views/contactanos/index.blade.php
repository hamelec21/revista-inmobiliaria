<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-gray-900">
@include('menu')

<!--contenido intro  -->

<div class="container mx-auto py-10 justify-center">

    <div class="grid md:grid-cols-1 lg:grid-cols-2  bg-gray-800  px-4">

        <div class="container  flex flex-col justify-center items-center">

            <div class="text-white text-center  flex justify-center py-4"> <img src="img/logo_cei.png" width="150px" class="w-32 object-contain"/></div>
            <div class=" text-white text-lg font-normal text-center mt-8">Roger de Flor 2736, Piso 6, Las Condes</div>
            <div class=" text-white text-lg font-normal text-center">contacto@ceichile.cl</div>
        </div>

        <div>
                <form  action="{{route('contactanos.store')}}" method="post" class="mx-auto w-full pt-10 sm:w-3/4">
                @csrf
                @if(session('info'))
                    <div class=" flex flex-row">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6 text-yellow-400" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>

                        <div>
                            <span class="text-yellow-400">Su Mensaje Ha Sido Envido Correctamente </span>
                        </div>
                    </div>
                @endif

<br>
                <div class="flex flex-col md:flex-row">
                    <input
                        class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                        name="nombre"
                        placeholder="Nombre"
                        type="text"
                        id="name"
                        required
                    />
                    <input
                        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                        name="email"
                        placeholder="Email"
                        type="text"
                        id="email"
                        required
                    />
                </div>
                <textarea
                    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8 mb-4"
                    name="mensaje"
                    placeholder="Mensaje"
                    id="message"
                    cols="30"
                    rows="10"
                    required
                >
            </textarea>
                <div class="text-center">
                    <button
                        class="bg-gray-800 rounded-lg px-4 py-2 mb-4  text-gray-400 text-lg borde border-2 hover:bg-white hover:text-gray-900"
                        type="submit">Enviar
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@include('footer')

<script>
    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
@livewireScripts
</body>
</html>
