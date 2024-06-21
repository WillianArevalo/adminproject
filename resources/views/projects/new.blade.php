@extends('layouts.app')

@section('title', 'Nuevo proyecto')

@section('content')
    <section class="mx-auto text-sm text-white pb-20">
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-white uppercase font-spaceGrotesk">Agregar nuevo proyecto</h2>
            </div>
            <div class="mt-4">
                <form action="{{ route('projects.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">
                                Nombre del proyecto
                            </label>
                            <div
                                class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('name') is-invalid @enderror h-12">
                                <input type="text" name="name" id="name"
                                    class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                    placeholder="Ingresa el nombre del proyecto" value="{{ old('name') }}">
                                @error('name')
                                    <span class="p-3 text-red-500">
                                        <x-icon icon="warning" class="w-5 h-5 text-current" />
                                    </span>
                                @enderror
                            </div>
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex gap-2">
                            <div class="flex flex-col flex-1 gap-2">
                                <label for="database" class="text-white">Base de datos</label>
                                <div
                                    class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('name') is-invalid @enderror h-12">
                                    <input type="text" name="database" id="database"
                                        class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                        placeholder="Ingresa el nombre del proyecto">
                                    <span class="p-3 text-zinc-600">
                                        <x-icon icon="database" class="w-5 h-5 text-zinc-600" />
                                    </span>
                                    @error('database')
                                        <span class="p-3 text-red-500">
                                            <x-icon icon="warning" class="w-5 h-5 text-current" />
                                        </span>
                                    @enderror
                                </div>
                                @error('database')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col flex-[2] gap-2">
                                <label for="path"
                                    class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">Directorio</label>
                                <div class="flex gap-2">
                                    <!-- Select custom -->
                                    <div
                                        class="relative flex flex-col flex-1 gap-2 custom-select border-2 border-zinc-900 rounded justify-center h-12">
                                        <input type="hidden" value="C:\" id="directory" name="directory">
                                        <div class="flex justify-between p-3 pl-5 text-white bg-transparent selected">
                                            <span class="flex items-center gap-3 item-selected">
                                                C:
                                            </span>
                                            <span class="flex items-center gap-2">
                                                <x-icon icon="arrow-down" class="w-5 h-5 text-white arrow-select" />
                                            </span>
                                        </div>
                                        <div
                                            class="absolute z-20 flex flex-col w-full overflow-hidden text-white bg-black border-2 rounded items-selected top-14 border-zinc-800">
                                            <span class="flex items-center gap-3 p-3 pl-5 hover:bg-zinc-950" data-value="C:"
                                                data-input="directory">
                                                C:
                                            </span>
                                            <span class="flex items-center gap-3 p-3 pl-5 hover:bg-zinc-950"
                                                data-value="C:\Users" data-input="directory">
                                                C:\Users
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End select custom -->
                                    <div
                                        class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('path') is-invalid @enderror flex-[3] h-12">
                                        <input type="text" name="path" id="path"
                                            class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                            placeholder="\Documentos\Example\Nombre carpeta">
                                        @error('path')
                                            <span class="p-3 text-red-500">
                                                <x-icon icon="warning" class="w-5 h-5 text-current" />
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="button"
                                        class="p-3 font-bold text-violet-300 bg-violet-800 border-2 border-violet-800 rounded border-opacity-15 bg-opacity-15 hover:bg-opacity-25 h-12 addBar"
                                        title="Agrega barra lateral invertida">
                                        + \
                                    </button>
                                </div>
                                @error('path')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex flex-col flex-1 gap-2">
                                <label for="url_localhost"
                                    class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">URL</label>
                                <div
                                    class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('url_localhost') is-invalid @enderror h-12">
                                    <input type="text" name="url_localhost" id="url_localhost"
                                        class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                        placeholder="Ingresa la URL del localhost">
                                    <span class="p-3 text-zinc-600">
                                        <x-icon icon="link" class="w-5 h-5 text-zinc-600" />
                                    </span>
                                    @error('url_localhost')
                                        <span class="p-3 text-red-500">
                                            <x-icon icon="warning" class="w-5 h-5 text-current" />
                                        </span>
                                    @enderror
                                </div>
                                @error('url_localhost')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col flex-1 gap-2">
                                <label for="repository" class="text-white">Repositorio</label>
                                <div
                                    class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('repository') is-invalid @enderror h-12">
                                    <input type="text" name="repository" id="repository"
                                        class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                        placeholder="Ingresa la dirección del repositorio">
                                    <span class="p-3 text-zinc-600">
                                        <x-icon icon="github" class="w-5 h-5 text-zinc-600" />
                                    </span>
                                    @error('repository')
                                        <span class="p-3 text-red-500">
                                            <x-icon icon="warning" class="w-5 h-5 text-current" />
                                        </span>
                                    @enderror
                                </div>
                                @error('repository')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex flex-col flex-[2] gap-2">
                                <label for="start_date"
                                    class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">Fecha
                                    inicio</label>
                                <div
                                    class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('start_date') is-invalid @enderror h-12">
                                    <input type="date" name="start_date" id="start_date"
                                        class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                        placeholder="Ingresa la URL del localhost">
                                    <span class="p-3 text-zinc-600">
                                        <x-icon icon="calendar" class="w-5 h-5 text-zinc-600" />
                                    </span>
                                    @error('start_date')
                                        <span class="p-3 text-red-500">
                                            <x-icon icon="warning" class="w-5 h-5 text-current" />
                                        </span>
                                    @enderror
                                </div>
                                @error('start_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col flex-1 gap-2">
                                <label for="status"
                                    class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">Estado</label>
                                <div
                                    class="relative flex flex-col flex-1 gap-2 custom-select border-2 rounded border-zinc-900 justify-center h-12">
                                    <input type="hidden" id="status" name="status">
                                    <div
                                        class="flex justify-between p-3 pl-5 text-white bg-transparent selected @error('status') is-invalid @enderror">
                                        <span class="flex items-center gap-3 item-selected">
                                            Selecciona un estado
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <x-icon icon="arrow-down" class="w-5 h-5 text-white arrow-select" />
                                            @error('status')
                                                <x-icon icon="warning" class="w-5 h-5 text-red-500" />
                                            @enderror
                                        </span>
                                    </div>
                                    <div
                                        class="absolute z-20 flex flex-col w-full overflow-hidden text-white bg-black border-2 rounded items-selected top-14 border-zinc-800">
                                        <span class="flex items-center gap-3 p-3 pl-5 hover:bg-zinc-950"
                                            data-value="active" data-input="status">
                                            En progreso
                                        </span>
                                        <span class="flex items-center gap-3 p-3 pl-5 hover:bg-zinc-950"
                                            data-value="complete" data-input="status">
                                            Finalizado
                                        </span>
                                        <span class="flex items-center gap-3 p-3 pl-5 hover:bg-zinc-950"
                                            data-value="desactive" data-input="status">
                                            Detenido
                                        </span>
                                    </div>
                                </div>
                                @error('status')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="hidden" id="endDate">
                            <div class="flex flex-col gap-2">
                                <label for="start_date"
                                    class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">
                                    Fecha final
                                </label>
                                <div
                                    class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 @error('start_date') is-invalid @enderror h-12">
                                    <input type="date" name="end_date" id="end_date"
                                        class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                        placeholder="Ingresa la URL del localhost">
                                    <span class="p-3 text-zinc-600">
                                        <x-icon icon="calendar" class="w-5 h-5 text-zinc-600" />
                                    </span>
                                    @error('end_date')
                                        <span class="p-3 text-red-500">
                                            <x-icon icon="warning" class="w-5 h-5 text-current" />
                                        </span>
                                    @enderror
                                </div>
                                @error('end_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="languages">Lenguajes:</label>
                            <div class="flex gap-2">
                                <div class="h-32 border-2 border-zinc-900 rounded p-4 flex-[3]">
                                    <p class="text-zinc-600">Ningún lenguaje seleccionado</p>
                                </div>
                                <div class="flex flex-col gap-2 flex-1">
                                    <button type="button" id="selectLenguages"
                                        class="p-3  text-violet-300 bg-violet-800 border-2 border-violet-800 rounded border-opacity-15 bg-opacity-15 hover:bg-opacity-25 h-12 flex items-center gap-2">
                                        <x-icon icon="select" class="w-4 h-4 text-current" />
                                        Seleccionar lenguajes
                                    </button>
                                    <button type="button" id="addLanguage"
                                        class="p-3 text-green-300 bg-green-800 border-2 border-green-800 rounded border-opacity-15 bg-opacity-15 hover:bg-opacity-25 h-12 flex items-center gap-2">
                                        <x-icon icon="plus" class="w-4 h-4 text-current" />
                                        Agregar lenguaje
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center gap-2">
                            <button type="submit"
                                class="px-5 py-3 text-green-400 bg-green-700 rounded-md bg-opacity-10 hover:bg-opacity-25  border-green-700 border-opacity-10 border-2 flex items-center gap-1">
                                <x-icon icon="add-circle" class="w-4 h-4 text-current" />
                                Ingresar
                            </button>
                            <a href="{{ route('projects.index') }}"
                                class="flex items-center justify-center gap-2 px-5 py-3 text-red-400 bg-red-700 rounded-md bg-opacity-10 border-red-700 border-2 border-opacity-10 hover:bg-opacity-25">
                                <x-icon icon="arrow-turn" class="w-4 h-4 text-current" />
                                Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal add language -->
        <div id="modalAddLanguage" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-60">
            <div
                class="bg-zinc-950 rounded-lg overflow-hidden w-1/3 border-zinc-900 border animate-jump-in animate-duration-300">
                <form action="{{ route('languages.store') }}" method="POST" id="formAddLanguage">
                    @csrf
                    <div class="px-6 py-4 flex flex-col gap-2">
                        <h2 class="text-lg font-semibold text-violet-600 uppercase">Agregar nuevo lenguaje</h2>
                        <div class="flex flex-col gap-2">
                            <label for="name_language"
                                class="text-white after:content-['*'] after:ml-0.5 after:text-red-500">
                                Nombre del lenguaje
                            </label>
                            <div
                                class="flex items-center bg-transparent border-2 rounded border-zinc-900 focus-within:border-blue-600 h-12">
                                <input type="text" name="name" id="name_language"
                                    class="w-full h-full p-3 bg-transparent border-2 border-transparent placeholder:text-zinc-600 focus:outline-none"
                                    placeholder="Ingresa el nombre del lenguaje">
                                <span class="p-3 text-red-500 hidden">
                                    <x-icon icon="warning" class="w-5 h-5 text-current" />
                                </span>
                            </div>
                            <span class="text-red-500 hidden">
                                El nombre del lenguaje es requerido
                            </span>
                        </div>
                    </div>
                    <div class="px-6 py-3 bg-zinc-950 text-right border-t border-zinc-900 flex gap-2 justify-end">
                        <button type="submit"
                            class="px-5 py-3 text-green-400 bg-green-700 rounded-md bg-opacity-10 hover:bg-opacity-25  border-green-700 border-opacity-10 border-2 flex items-center gap-1">
                            <x-icon icon="plus" class="w-4 h-4 text-current" />
                            Agregar
                        </button>
                        <button type="button"
                            class="flex items-center justify-center gap-2 px-5 py-3 text-red-400 bg-red-700 rounded-md bg-opacity-10 border-red-700 border-2 border-opacity-10 hover:bg-opacity-20 closeModal">
                            <x-icon icon="close" class="w-4 h-4 text-current" />
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal select language -->
        <div id="modalSelectLanguage"
            class="fixed inset-0 hidden flex items-center justify-center bg-black bg-opacity-60">
            <div
                class="bg-zinc-950 rounded-lg overflow-hidden w-1/3 border-zinc-900 border animate-jump-in animate-duration-300">
                <div class="px-6 py-4 flex flex-col gap-2">
                    <h2 class="text-lg font-semibold text-violet-600 uppercase">
                        Seleccionar lenguajes
                    </h2>
                    <div class="flex flex-col gap-2" id="listLanguages">
                        @foreach ($languages as $language)
                            <div class="flex items-center gap-2 bg-zinc-900 p-2 rounded text-white">
                                <input type="checkbox" id="lang-{{ $language->id }}" name="languages[]"
                                    value="{{ $language->id }}" class="ui-checkbox">
                                <label for="lang-{{ $language->name }}"
                                    class="ml-2 text-sm font-medium text-white">{{ $language->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="px-6 py-3 bg-zinc-950 text-right border-t border-zinc-900 flex gap-2 justify-end">
                    <button type="button"
                        class="px-5 py-3 text-green-400 bg-green-700 rounded-md bg-opacity-10 hover:bg-opacity-25  border-green-700 border-opacity-10 border-2 flex items-center gap-1">
                        <x-icon icon="plus" class="w-4 h-4 text-current" />
                        Seleccionar
                    </button>
                    <button type="button"
                        class="flex items-center justify-center gap-2 px-5 py-3 text-red-400 bg-red-700 rounded-md bg-opacity-10 border-red-700 border-2 border-opacity-10 hover:bg-opacity-20 closeModal">
                        <x-icon icon="close" class="w-4 h-4 text-current" />
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
