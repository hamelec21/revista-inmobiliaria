<div>
    @livewire('menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">
        <!--header busqueda -->
        <div class="container bg-gray-200  m-4 mx-auto lg:w-5/6 rounded-lg">
            <div class=" flex items-center justify-center">
                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="flex items-center space-x-4 p-4 ">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                     viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input wire:model="search" type="text" id="table-search"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Buscar Titulo Noticia">
                        </div>
                    </div>
                    <div class="lg:pt-5">@livewire('panel.noticia.crear-noticia')</div>
                </div>
            </div>
        </div>
        <!--fin header-->
        <div class="container mx-auto justify-center py-4">
            @if ($news->count())
            <div class="grid lg:grid-cols-2 md:grid-col-1 gap-4 px-4">
                <!--start copy-->
                @foreach($news as $new)
                    <div>

                        <div class="bg-white rounded-md">
                            <div class="px-2 py-2 rounded-t-md bg-gray-200">Noticia</div>
                            <div class="grid lg:grid-cols-2 md:grid-col-1">
                                <!--card new-->
                                <div class="">
                                    <img
                                        src="{{Storage::url($new->imagen)}}"
                                        class="object-cover object-center lg:rounded-bl-md md:rounded-none"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <div class="text-lg text-gray-900 font-bold px-4 mt-2">
                                        {{$new->titulo}}
                                    </div>

                                    <div class="flex items-center justify-around py-2">
                                        @livewire('panel.noticia.editar-noticia',['new'=>$new],key($new->id))
                                        <a onclick="confirm('Estas Seguro de Eliminar La Noticia !')||event.stopImmediatePropagation()" wire:click="destroy({{$new->id}})"><button class="btn btn-eliminar " >Eliminar</button> </a>
                                    </div>


                                </div>
                                <!--fin card new-->
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            @else
                @include('components.alerta_busqueda')
            @endif
            <div class="bg-gray-200">
                @if ($news->hasPages())
                    <div class="px-6 py-3 ">
                        {{$news->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
