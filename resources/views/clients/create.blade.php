@extends('layouts.app')

@section('content')
<div class="py-12">
    @include('layouts.list.sidebar')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto p-14">
                <form action="{{ route('client.store') }}" method="post">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Información del Cliente</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Ingresa los datos de un nuevo Cliente</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <!-- Nombre -->
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-900">Nombre</label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Apellido -->
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-900">Apellido</label>
                                    <div class="mt-2">
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Correo -->
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-900">Correo</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Teléfono -->
                                <div class="sm:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-900">Número de teléfono</label>
                                    <div class="mt-2">
                                        <input id="phone" name="phone" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Código Postal (CP) -->
                                <div class="sm:col-span-2">
                                    <label for="cp" class="block text-sm font-medium text-gray-900">CP</label>
                                    <div class="mt-2">
                                        <input type="text" name="cp" id="cp" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('cp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Token (Solo Lectura) -->
                                <div class="sm:col-span-2">
                                    <label for="token" class="block text-sm font-medium text-gray-900">Token</label>
                                    <div class="mt-2">
                                        <input type="text" name="token" id="token" value="{{ $token }}" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <!-- Dirección -->
                                <div class="sm:col-span-2">
                                    <label for="address" class="block text-sm font-medium text-gray-900">Dirección</label>
                                    <div class="mt-2">
                                        <input type="text" name="address" id="address" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Ciudad -->
                                <div class="sm:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-900">Ciudad</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Estado -->
                                <div class="sm:col-span-2">
                                    <label for="state" class="block text-sm font-medium text-gray-900">Estado</label>
                                    <div class="mt-2">
                                        <input type="text" name="state" id="state" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('state') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Fecha de Nacimiento -->
                                <div class="sm:col-span-2">
                                    <label for="birthdate" class="block text-sm font-medium text-gray-900">Fecha de Nacimiento</label>
                                    <div class="mt-2">
                                        <input type="date" name="birthdate" id="birthdate" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('birthdate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Estatus -->
                                <div class="sm:col-span-2">
                                    <label for="status" class="block text-sm font-medium text-gray-900">Estatus</label>
                                    <div class="mt-2">
                                        <select name="status" id="status" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="active">Activo</option>
                                            <option value="inactive">Inactivo</option>
                                        </select>
                                        @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Contador -->
                                <div class="sm:col-span-2">
                                    <label for="counter_id" class="block text-sm font-medium text-gray-900">Contador</label>
                                    <div class="mt-2">
                                        <select name="counter_id" id="counter_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @foreach ($counters as $counter)
                                                <option value="{{ $counter->id }}">{{ $counter->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('counter_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('counter.index') }}" class="text-sm font-semibold text-gray-900">Cancelar</a>
                            <button type="submit" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:ring-2 focus-visible:ring-indigo-600">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
