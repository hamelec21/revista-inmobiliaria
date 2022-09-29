<div>
    <div class="container mx-auto justify-center py-10 px-4">
        @if ($noticias->count())
        <div class="grid lg:grid-cols-2 md:grid-col-1 gap-4">

            @foreach($noticias as $noticia)
                <div>
                    <a
                        href="{{$noticia->url}}"
                        target="_blank"
                    >
                        <div class="bg-white rounded-md">
                            <div class="px-2 py-2 rounded-t-md bg-gray-100">Enlace</div>
                            <div class="grid lg:grid-cols-2 md:grid-col-1">
                                <!--card new-->
                                <div>
                                    <img
                                        src="{{Storage::url($noticia->imagen)}}"
                                        class="object-cover object-center lg:rounded-bl-md md:rounded-none"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <div class="text-lg text-gray-900 font-bold px-4 mt-2">
                                        {{$noticia->titulo}}
                                    </div>
                                    <p class="text-justify px-4 text-gray-800 text-md m-2">
                                       {{$noticia->extracto}}
                                    </p>
                                </div>
                                <!--fin card new-->
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @else
            @include('components.alerta_busqueda')
        @endif
        <div class="bg-gray-100 rounded-lg mt-4">
            @if ($noticias->hasPages())
                <div class="px-6 py-3 ">
                    {{$noticias->links() }}
                </div>
            @endif
        </div>
    </div>


</div>
