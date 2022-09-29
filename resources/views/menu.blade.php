
<!--Seccion logo o nombre de la web-->

<div class=" container mx-auto py-2">
    <div class="flex items-center justify-between">
        <img src="img/logo_cei.png" class="w-44" />
        <!-- <div class="px-2 py-8 text-white text-lg"></div>-->
    </div>
    <div class="border-b-2"></div>

</div>


<!--Menu de Navegacion-->
<div class="container mx-auto  justify-center">

    <nav class="bg-gray-900 justify-start">

        <div class="max-w-6xl justify-end px-2"><!--alineacion del menu-->
            <div class="text-center">
                <div class="">
                    <!-- menu princinpal -->
                    <div class="items-center hidden space-x-1 md:flex">

                        <div class="items-center hidden space-x-1 md:flex">

                            <a href="/"
                               class=" px-4 py-1  font-bold text-white hover:text-gray-400">Home
                            </a>

                            <a href="/nosotros"
                               class=" px-4 py-1  font-bold text-white hover:text-gray-400">Nosotros
                            </a>

                            <a
                                href="/noticias"
                                class="px-4 py-1 font-bold text-white hover:text-gray-400"
                            >Noticias
                            </a>

                            <a href="/contactanos"
                               class=" px-4 py-1  font-bold text-white hover:text-gray-400">Contacto
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Boton menu Movil -->
                <div class="flex  items-center md:hidden">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6  text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- mobile menu -->
        <div class="hidden mobile-menu md:hidden px-5 ">
            <ul>
                <li class="py-2">
                    <a href="index.html"
                       class=" px-4 py-1  font-bold text-white hover:text-gray-400">Home
                    </a>
                </li>

                <li class="py-2">
                    <a href="/nosotros"
                       class=" px-4 py-1  font-bold text-white hover:text-gray-400">Nosotros
                    </a>
                </li>

                <li class="py-2">
                    <a
                        href="noticias.html"
                        class="px-4 py-1 font-bold text-white hover:text-gray-400"
                    >Noticias
                    </a>
                </li>

                <li class="py-2">
                    <a href="contacto.html"
                       class=" px-4 py-1  font-bold text-white hover:text-gray-400">Contacto
                    </a>
                </li>

            </ul>

        </div>
    </nav>
</div>
