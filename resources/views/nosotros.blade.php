<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-900">
<!--Seccion logo o nombre de la web-->

@include('menu')

<!--contenido intro  -->
<div class="container mx-auto m-8 justify-center bg-gray-800">
    <div class="grid md:grid-cols-1 lg:grid-cols-2">
        <div>
            <img
                class="aspect-video object-cover object-center"
                src="img/nosotros.jpg"
            />
        </div>

        <div class="text-center">
            <div class="text-white py-10 text-2xl text-center">Nosotros</div>

            <p class="text-white text-lg font-normal py-2 text-justify p-6">
                El Centro de Estudios Inmobiliarios CEI tiene como misión generar
                información actualizada y entregar conocimiento en las distintas
                disciplinas que participan de un proceso de desarrollo inmobiliario.
                CEI busca ayudar a potenciar el crecimiento y desarrollo de nuestro
                sector inmobiliario, a través de sus programas de formación y
                capacitación especializada, y de la organización de eventos y
                seminarios relacionados con los cambios permanentes del mercado
                inmobiliario.
            </p>
            <div class="m-10">
                <a href="{{ route('contactanos.index') }}"> <button
                        class="bg-gray-800 rounded-lg px-4 py-2 text-gray-400 text-lg borde border-2 hover:bg-white hover:text-gray-900"
                    >
                        Contacto
                    </button></a>
            </div>
        </div>
    </div>
</div>


<!--Redes sociales-->
<!--Redes sociales-->
<div class="container mx-auto m-8 justify-center flex flex-row space-x-2  pb-4 px-2 py-2">

    <div class="text-white text-center w-10"><a href="#"><img src="img/redes_sociales/facebook.png"></a></div>
    <div class="text-white text-center w-10"><a href="https://instagram.com/centroestudioinmobiliario?igshid=MTA0ZTI1NzA=" target="_blank"><img src="img/redes_sociales/instagram.png"></a></div>
    <div class="text-white text-center w-10"><a href="https://www.linkedin.com/company/centro-de-estudios-inmobiliarios/" target="_blank"><img src="img/redes_sociales/linkedin.png"></a></div>


</div>

<!--footert-->

<div class="container mx-auto m-8 justify-center">
    <div class="text-white text-center">
        ©2022 por revista inmobiliaria. Creada Por Catemudigital
    </div>
</div>

<script>
    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
</body>
</html>
