<div>
    <div>

        <div class="p-2">
            <a class="btn btn-editar mr-2" wire:click="$set('open_editar',true)"><i class="fas fa-edit mr-2"></i>Editar</a>
        </div>

        <x-jet-dialog-modal wire:model="open_editar" maxWidth="2xl">
            <x-slot name="title">
                <div
                    class="text-white bg-gradient-to-r from-amber-500 to-amber-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                    Editar Noticia
                </div>
            </x-slot>

            <x-slot name="content">
                <form>
                    <div class="container ">
                        <div class="grid grid-cols-1  gap-2">
                            <div class=" text-left text-gray-900 font-bold py-1 text-sm">
                                <label class="px-2">Titulo Noticia</label>
                                <input wire:model="new.titulo" type="text" name="titulo" id="" placeholder="Titulo" maxlength="150"
                                       class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                @error('titulo') <span
                                    class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class=" text-left text-gray-900 font-bold py-1 text-sm">
                                <label class="px-2">Extracto Noticia</label>
                                <textarea wire:model="new.extracto" type="text" name="extracto" rows="5" minlength="60" maxlength="215"
                                          placeholder="extracto Noticia"
                                          class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                                </textarea>

                                @error('extracto') <span
                                    class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class=" text-left text-gray-900 font-bold py-1 text-sm">
                                <label class="px-2">URL Noticia</label>
                                <input wire:model="new.url" type="text" name="url" id="" placeholder="url"
                                       class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                @error('url') <span
                                    class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class=" text-left text-gray-900 font-bold py-1  text-sm">
                                <label class="px-2 ">Subir Imagen</label>
                                <input wire:model="imagen" type="file" name="imagen" id="{{ $identificador }}"
                                       placeholder="https://juanramoncornejo.cl/"
                                       class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                @error('imagen') <span
                                    class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </form>


            </x-slot>

            <x-slot name="footer">
                <x-jet-button class="ml-4" wire:click="save">
                    Guardar
                </x-jet-button>
                <x-jet-secondary-button class="ml-4" wire:click="$set('open_editar',false)">
                    Cancelar
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>

</div>

