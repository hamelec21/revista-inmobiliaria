<div class="container mx-auto justify-center py-10 ">
    <div class="grid lg:grid-cols-3 md:grid-col-1 gap-4">
        @foreach($resumen as $item)
            <!--start copy-->
            <div>
                <a href="/noticias">
                    <div class="bg-white rounded-md">
                        <div class="px-2 py-2 rounded-t-md bg-gray-100">Noticia</div>
                        <div class="grid lg:grid-cols-2 md:grid-col-1">
                            <!--card new-->
                            <div>
                                <img
                                    src="{{Storage::url($item->imagen)}}"
                                    class="object-cover object-center lg:rounded-bl-md md:rounded-none"
                                />
                            </div>
                            <div class="flex flex-col">
                                <div class="text-lg text-gray-900 font-bold px-4 mt-2">
                                    {{$item->titulo}}
                                </div>

                            </div>
                            <!--fin card new-->
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        <!--start copy-->
    </div>
</div>
