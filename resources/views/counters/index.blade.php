@extends('layouts.app')

@section('content')
<div class="py-12">
    @include('layouts.list.sidebar')

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto p-14">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <!-- Mensaje de Éxito -->
                            @if (session('success'))
                                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Título y Botón Agregar -->
                            <div class="mb-8">
                                <h2 class="text-lg font-bold mb-3">Contadores</h2>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-500">Lista de todos los contadores existentes</p>
                                    <a href="{{ route('counter.create') }}" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Agregar
                                    </a>
                                </div>
                            </div>

                            <!-- Tabla de Contadores -->
                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
