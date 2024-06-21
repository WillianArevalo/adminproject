@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <section class="text-sm text-white rounded">
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-white uppercase font-spaceGrotesk">
                    Listado de proyectos
                </h2>
                <a href="{{ route('projects.create') }}"
                    class="flex items-center justify-center gap-2 p-3 border-2 border-violet-700 border-opacity-10 text-violet-200 bg-violet-700 rounded-md bg-opacity-10 hover:bg-opacity-30 font-quicksand">
                    <x-icon icon="folder-add" class="w-4 h-4 text-current" />
                    Agregar nuevo
                </a>
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <!-- Project -->
                <div class="flex justify-between gap-2 rounded CARD bg-zinc-950">
                    <div class="relative w-full border rounded border-zinc-900">
                        <div class="flex items-center justify-between px-6 py-2 border-b border-zinc-900">
                            <h3 class="text-base font-semibold font-quicksand text-violet-600 uppercase">Proyecto: CIS
                                WebControl</h3>
                            <div class="flex items-center gap-2">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full bg-sky-500 gap-x-1 bg-opacity-10">
                                    <span class="text-sky-500">
                                        <x-icon icon="loading" class="w-4 h-4 text-current" />
                                    </span>
                                    <h2 class="font-normal text-sky-500">En progreso</h2>
                                </div>
                                <button type="button"
                                    class="p-2 border rounded border-zinc-900 hover:bg-zinc-900 changeStatus"
                                    data-id="1">
                                    <x-icon icon="exchange" class="w-5 h-5 text-current" />
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-start gap-1 px-6 py-3">
                            <div class="flex flex-wrap items-center gap-1 px-3 py-2 border rounded border-zinc-900">
                                Base de datos:
                                <span
                                    class="flex items-center px-3 py-1 text-xs font-bold text-yellow-200 bg-yellow-700 rounded-2xl bg-opacity-15">proyectosqllite.sql</span>
                            </div>
                            <div class="flex items-center gap-1 px-3 py-2 border rounded border-zinc-900">
                                <span class="flex items-center justify-center gap-1">
                                    <x-icon icon="folder" class="w-4 h-4 text-white" />
                                    Directorio:
                                </span>
                                <span class="font-bold text-violet-700">/htdocs/cis</span>
                            </div>
                            <div class="flex items-center gap-1 px-3 py-2 border rounded border-zinc-900">
                                <span class="flex items-center justify-center gap-1">
                                    <x-icon icon="link" class="w-4 h-4 text-white" />
                                    URL:
                                </span>
                                <a href="#" class="font-bold text-blue-700">/localhost/cis</a>
                            </div>
                            <div class="flex items-center gap-1 px-3 py-2 border rounded border-zinc-900">
                                <span class="flex items-center justify-center gap-1">
                                    <x-icon icon="github" class="w-4 h-4 text-white" />
                                    Repositorio:
                                </span>
                                <a href="#" class="font-bold text-sky-700">cis</a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between px-6 py-2 border-t border-zinc-900">
                            <div class="flex gap-2">
                                <a href="" class="p-2 text-green-300 bg-green-800 rounded bg-opacity-15">
                                    <x-icon icon="edit" class="w-5 h-5 text-current" />
                                </a>
                                <a href="" class="p-2 text-red-300 bg-red-800 rounded bg-opacity-15">
                                    <x-icon icon="trash" class="w-5 h-5 text-current" />
                                </a>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <span class="p-2 text-orange-300 bg-orange-700 rounded bg-opacity-15">
                                    HTML
                                </span>
                                <span class="p-2 text-blue-300 bg-blue-700 rounded bg-opacity-15">
                                    CSS
                                </span>
                                <span class="p-2 text-yellow-300 bg-yellow-700 rounded bg-opacity-15">
                                    JavaScript
                                </span>
                                <span class="p-2 text-yellow-300 bg-yellow-700 rounded bg-opacity-15">
                                    Jquery
                                </span>
                                <span class="p-2 text-gray-300 rounded bg-blue-950 bg-opacity-15">
                                    PHP
                                </span>
                                <span class="p-2 text-red-300 bg-red-600 rounded bg-opacity-15">
                                    Laravel
                                </span>
                                <span class="p-2 rounded text-sky-300 bg-sky-600 bg-opacity-15">
                                    SQL
                                </span>
                            </div>
                        </div>
                        <div class="absolute top-0 hidden border rounded bg-zinc-950 -right-36 border-zinc-900 optionsStatus"
                            data-id="1">
                            <ul class="flex flex-col gap-1">
                                <li class="flex items-center gap-1 px-4 py-2 cursor-pointer hover:bg-zinc-900"
                                    data-status="active">
                                    <x-icon icon="loading" class="w-4 h-4 text-current" />
                                    En progreso
                                </li>
                                <li class="flex items-center gap-1 px-4 py-2 cursor-pointer hover:bg-zinc-900"
                                    data-status="desactive">
                                    <x-icon icon="close" class="w-4 h-4 text-current" />
                                    Detenido
                                </li>
                                <li class="flex items-center gap-1 px-4 py-2 cursor-pointer hover:bg-zinc-900"
                                    data-status="complete">
                                    <x-icon icon="checkmark" class="w-4 h-4 text-current" />
                                    Finalizado
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End project -->
            </div>
        </div>
    </section>
@endsection
