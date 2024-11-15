@extends('layouts.app')
@section('content')
    <div class="py-12">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto p-12" >
                    <div class="pb-10">
                        <p class="text-center font-bold text-2xl">{{ $counter->name . " " . $counter->last_name}} </p>
                    </div>

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion personal</h2>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->user->email ? '' : 'text-gray-400 italic' }}"> {{ $counter->user->email ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="rfc"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fecha de
                                        nacimiento</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->birthdate ? '' : 'text-gray-400 italic' }}"> {{ $counter->birthdate ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>
                                

                                <div class="sm:col-span-3">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">RFC</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->rfc ? '' : 'text-gray-400 italic' }}"> {{ $counter->rfc ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">CURP</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->curp ? '' : 'text-gray-400 italic' }}"> {{ $counter->curp ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->phone ? '' : 'text-gray-400 italic' }}"> {{ $counter->phone ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Drección</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->address ? '' : 'text-gray-400 italic' }}"> {{ $counter->address ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->city ? '' : 'text-gray-400 italic' }}"> {{ $counter->city ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">CP</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->cp ? '' : 'text-gray-400 italic' }}"> {{ $counter->cp ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->state ? '' : 'text-gray-400 italic' }}"> {{ $counter->state ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Regimen</label>
                                    <div class="mt-2">
                                        <p class="{{ $counter->regimen ? '' : 'text-gray-400 italic' }}"> {{ $counter->regimen ?? 'Sin datos existentes'}} </p>
                                    </div>
                                </div>



                                <div class="sm:col-span-2">
                                    <label for="curp" class="block text-sm font-medium leading-6 text-gray-900">No.
                                        de clientes</label>
                                    <div class="mt-2">
                                        <p > {{ $counter->clients->count() }} </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-4 flex items-center justify-end gap-x-6 pb-4 pr-3">
                            <a href="{{ route('counter.index') }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancelar</a>
                            <a href="{{route('counter.edit', $counter->id)}}" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
                            
                        </div>
                        <livewire:client-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
