@extends('layouts.app')

@section('content')
    <div class="py-1">
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
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block text-sm font-medium text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <input type="text" name="name" id="name" autocomplete="given-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe los nombres</span>
                                            @error('name')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Apellido -->
                                    <div class="sm:col-span-2">
                                        <label for="last_name"
                                            class="block text-sm font-medium text-gray-900">Apellido</label>
                                        <div class="mt-2">
                                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe los apellidos</span>
                                            @error('last_name')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-900">Correo</label>
                                        <div class="mt-2">
                                            <input type="text" name="email" id="email" autocomplete="family-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el correo</span>
                                            @error('email')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="phone" class="block text-sm font-medium text-gray-900">Numero de
                                            Telefono</label>
                                        <div class="mt-2">
                                            <input type="text" name="phone" id="phone" autocomplete="phone-level1"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el telefono</span>
                                            @error('phone')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Correo -->
                                    <div class="sm:col-span-2">
                                        <label for="rfc" class="block text-sm font-medium text-gray-900">RFC</label>
                                        <div class="mt-2">
                                            <input id="rfc" name="rfc" type="text" maxlength="13"
                                                autocomplete="rfc"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el RFC</span>
                                            @error('rfc')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Teléfono -->
                                    <div class="sm:col-span-2">
                                        <label for="curp" class="block text-sm font-medium text-gray-900">CURP</label>
                                        <div class="mt-2">
                                            <input id="curp" name="curp" type="text" maxlength="18"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el CURP</span>
                                            @error('curp')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="sm:col-span-2">
                                        <label for="address"
                                            class="block text-sm font-medium text-gray-900">Dirección</label>
                                        <div class="mt-2">
                                            <input type="text" name="address" id="address"
                                                autocomplete="address-level1"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe la dirección</span>
                                            @error('address')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Ciudad -->
                                    <div class="sm:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-900">Ciudad</label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city"
                                                autocomplete="address-level2"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe la ciudad</span>
                                            @error('city')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Estado -->
                                    <div class="sm:col-span-2">
                                        <label for="cp" class="block text-sm font-medium text-gray-900">CP</label>
                                        <div class="mt-2">
                                            <input type="text" name="cp" id="cp"
                                                autocomplete="address-level1"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el CP</span>
                                            @error('cp')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Fecha de Nacimiento -->
                                    <div class="sm:col-span-2">
                                        <label for="state"
                                            class="block text-sm font-medium text-gray-900">Estado</label>
                                        <div class="mt-2">
                                            <input type="text" name="state" id="state"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Escribe el estado</span>
                                            @error('state')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="sm:col-span-2">
                                        <label for="nss" class="block text-sm font-medium text-gray-900">NSS</label>
                                        <div class="mt-2">
                                            <input type="text" name="nss" id="nss"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe el NSS</span>
                                            @error('nss')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="siec" class="block text-sm font-medium text-gray-900">Contraseña
                                            SIEC</label>
                                        <div class="mt-2">
                                            <input type="text" name="#" id="siec"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe la contraseña SIEC</span>
                                            @error('siec')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="useridse" class="block text-sm font-medium text-gray-900">Usuario
                                            IDSE</label>
                                        <div class="mt-2">
                                            <input type="text" name="#" id="useridse"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt"> Porfavor escribe el usuairo IDSE</span>
                                            @error('useridse')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="idse" class="block text-sm font-medium text-gray-900">Contraseña
                                            IDSE</label>
                                        <div class="mt-2">
                                            <input type="text" name="#" id="idse"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <span class="label-text-alt">Porfavor escribe la contraseña IDSE</span>
                                            @error('idse')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="usersipare" class="block text-sm font-medium text-gray-900">Usuario
                                            Sipare</label>
                                        <div class="mt-2">
                                            <input type="text" name="#" id="usersipare"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <span class="label-text-alt">Porfavor escribe el usuario Sipare</span>
                                            @error('usersipare')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="sm:col-span-3">
                                        <label for="sipare" class="block text-sm font-medium text-gray-900">Contraseña
                                            Sipare</label>
                                        <div class="mt-2">
                                            <input type="text" name="#" id="sipare"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <span class="label-text-alt">Porfavor escribe la contraseña Sipare</span>
                                            @error('sipare')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="sm:col-span-2">
                                        <label for="birthdate"
                                            class="block text-sm font-medium text-gray-900">Cumpleaños</label>
                                        <div class="mt-2">
                                            <input type="date" name="birthdate" id="birthdate"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <span class="label-text-alt">Porfavor digite la fecha de nacimiento</span>
                                            @error('birthdate')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="sm:col-span-2">
                                        <label for="regimen"
                                            class="block text-sm font-medium text-gray-900">Régimen</label>
                                        <div class="mt-2">
                                            <select name="counter_id" id="counter_id"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option value="">Seleccione un régimen</option>
                                                @foreach ($regimes as $regime)
                                                    <option value="{{ $regime->title }}">{{ $regime->title }}</option>
                                                @endforeach
                                            </select>
                                                <span class="label-text-alt">Porfavor seleccione un régimen</span>
                                            @error('regimen')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Estatus -->
                                    <div class="sm:col-span-2">
                                        <label for="status"
                                            class="block text-sm font-medium text-gray-900">Estatus</label>
                                        <div class="mt-2">
                                            <select name="status" id="status"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option value="active">Activo</option>
                                                <option value="inactive">Inactivo</option>
                                            </select>
                                                <span class="label-text-alt">Porfavor seleccione el estatus</span>
                                            @error('status')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>






                                    <div class="sm:col-span-3">
                                        <div class="sm:col-span-2">
                                            <label for="note"
                                                class="block text-sm font-medium text-gray-900">Nota</label>
                                            <div class="mt-2">
                                                <textarea type="text" name="note" style="resize: none;" id="note" rows="5" cols="30"
                                                    maxlength="255"
                                                    class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                    <span class="label-text-alt ml-2">Escribe una nota para el cliente :D</span>
                                                @error('note')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3  ">




                                        <label for="counter_id"
                                            class="block text-sm font-medium text-gray-900">Contador</label>
                                        <div class="mt-2 mb-2">
                                            <select name="counter_id" id="counter_id"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                @foreach ($counters as $counter)
                                                    <option value="{{ $counter->id }}">
                                                        {{ $counter->name . ' ' . $counter->last_name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="label-text-alt ml-2">Contador asignado</span>
                                            @error('counter_id')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        

                                        <label for="token"
                                            class="block text-sm font-medium text-gray-900">Token</label>
                                        <div class="mt-2">
                                            <input type="text" name="token" id="token"
                                                value="{{ $token }}" readonly
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                        <span class="label-text-alt ml-2">Token de registro</span>





                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="#" onclick="history.back()"
                                class="btn btn-soft btn-secondary">Cancelar</a>
                            <button type="submit"
                                class="btn btn-soft btn-accent">Guardar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
