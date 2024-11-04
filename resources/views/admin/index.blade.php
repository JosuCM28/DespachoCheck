
@extends('adminlte::page')

@section('title', 'Despacho BM')

@section('content_header')
    <h1>Despacho BM</h1>
@stop

@section('content')
    <div>
    <p>Bienvenido {{ Auth::user()->name }}</p>
    </div>
    <div class="flex-1 py-4">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-4">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="{{ route('counter.create') }}">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-user-plus text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Agregar contador</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="#">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-user-plus text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Agregar Cliente</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="#">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-scroll text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Crear Recibo</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="#">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-eye text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Ver Contadores</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="#">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-eye text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Ver Clientes</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-white p-4">
                                <div class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                    <a href="#">
                                        <div class="flex gap-2 flex-col justify-center items-center">
                                            <i class="fa-solid fa-eye text-3xl" style="color: #000000;"></i>
                                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900">Ver Recibos</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop