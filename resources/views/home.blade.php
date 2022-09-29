<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>

    <title>CEI CHILE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    @livewireStyles


</head>
<body class="bg-gray-900 ">
@include('menu')

<!--contenido intro  -->

<div class="container mx-auto m-8 justify-center">

    <div class="grid md:grid-cols-1 lg:grid-cols-2  bg-gray-800 ">

        <div class="text-center py-20">

            <div class="text-white text-xl py-10">Vive la experiencia de ser parte de CEI. Inscríbete para poder
                enviarte toda la información de nuestros cursos, seminarios y descuentos”.
            </div>
            <div class=" text-white text-lg font-normal py-4">Te invitamos a explorar</div>
            <a href="{{ route('contactanos.index') }}">
                <button
                    class="bg-gray-800 rounded-lg px-4 py-2  text-gray-400 text-lg borde border-2 hover:bg-white hover:text-gray-900">
                    Contacto
                </button>
            </a>

        </div>


        <div>
            <img class="aspect-video  object-cover" src="img/people.jpg"/>
        </div>

    </div>
</div>

<!--Slider show-->
<div class="container mx-auto m-8 justify-center ">


    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <a href="https://www.flipsnack.com/cestin/an-lisis-de-eliminaci-n-de-ceec.html" target="_blank"">
                <img
                    src="img/slider/banner_2.jpg"
                    class="block w-full h-full"
                    alt="..."
                />
                </a>
                <div class="carousel-caption  md:block absolute text-center"><!--se elimina hidden-->
                    <div class="rounded-md px-4 py-4  bg-gray-900  bg-opacity-70">
                        <h5 class=" md:text-md lg:text-3xl text-white font-bold">Análisis de eliminación de CEEC en el
                            precio de la vivienda</h5>
                    </div>

                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <a href="https://www.flipsnack.com/cestin/informe-2-requisito-contrato-de-compraventa.html"
                   target="_blank">
                    <img
                        src="img/slider/banner_1.jpg"
                        class="block w-full object-center"
                        alt="..."
                    />
                </a>
                <div class="carousel-caption  md:block absolute text-center"><!--se elimina hidden-->
                    <div class="rounded-md px-4 py-4  bg-gray-900  bg-opacity-70">
                        <h5 class="md:text-md lg:text-3xl text-white font-bold">Requisito Contrato de Compraventa</h5>
                    </div>


                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <a href="https://www.flipsnack.com/cestin/la-tributaci-n-en-la-venta-de-bienes-ra-ces.html"
                   target="_blank">
                    <img
                        src="img/slider/banner_3.jpg"
                        class="block w-full"
                        alt="..."
                    />
                </a>
                <div class="carousel-caption  md:block absolute text-center"><!--se elimina hidden-->
                    <div class="rounded-md px-4 py-4  bg-gray-900  bg-opacity-70">
                        <h5 class="md:text-md lg:text-3xl text-white font-bold">La Tributación en la venta de Bienes
                            Raíces</h5>
                    </div>

                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!--frase motivacional-->
<div class="container mx-auto py-10 justify-center">

    <div class="grid md:grid-cols-1 lg:grid-cols-2 bg-gray-800">

        <div>
            <img class="aspect-video  object-cover object-center" src="img/mar.jpg"/>
        </div>

        <div class="text-center flex justify-center items-center">
            <span
                class="text-white text-2xl py-20 ">"La vida te pondrá obstáculos pero los limites los pones tú".
            </span>
        </div>
    </div>
</div>
<!--test-->

@livewire('frontend.noticias.resumen')

<!--test-->
<div class="container mx-auto py-10 justify-center">

    <div class="grid md:grid-cols-1 lg:grid-cols-2 bg-gray-800">

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
@livewireScripts
</body>

<script>
    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>


</html>
