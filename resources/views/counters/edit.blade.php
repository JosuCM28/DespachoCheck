@extends('layouts.app')
@section('content')
    <div class="py-12">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto p-14">
                    <form action="{{ route('counter.update', $counter->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Actualiza Información personal
                                </h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Ingresa los datos del contador que deseas
                                    actualizar</p>
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <input type="text" name="name" id="name" autocomplete="given-name"
                                                value="{{ $counter->name ?? '' }}"
                                                placeholder="{{ $counter->name ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('name')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last_name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                                        <div class="mt-2">
                                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                                value="{{ $counter->last_name ?? '' }}"
                                                placeholder="{{ $counter->last_name ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @error('last_name')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                value="{{ $counter->user->email ?? '' }}"
                                                placeholder="{{ $counter->user->email ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('email')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="password"
                                            class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                                        <div class="mt-2">
                                            <input id="password" name="password" type="password"
                                                placeholder="Cambia Contraseña (opcional)"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><i
                                                class="fa-regular fa-eye-slash" style="color: #181716;"
                                                id="togglePassword"></i>

                                            @error('password')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="rfc"
                                            class="block text-sm font-medium leading-6 text-gray-900">RFC</label>
                                        <div class="mt-2">
                                            <input type="text" name="rfc" id="rfc"
                                                autocomplete="address-level2" value="{{ $counter->rfc ?? '' }}"
                                                placeholder="{{ $counter->rfc ? '' : 'No hay datos existentes' }}"
                                                maxlength="13"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('rfc')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="curp"
                                            class="block text-sm font-medium leading-6 text-gray-900">CURP</label>
                                        <div class="mt-2">
                                            <input type="text" name="curp" id="curp" autocomplete="curp"
                                                maxlength="18" value="{{ $counter->curp ?? '' }}"
                                                placeholder="{{ $counter->curp ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('curp')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="phone"
                                            class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                                        <div class="mt-2">
                                            <input id="phone" maxlength="10" name="phone" type="text"
                                                value="{{ $counter->phone ?? '' }}"
                                                placeholder="{{ $counter->phone ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @error('phone')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="address"
                                            class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
                                        <div class="mt-2">
                                            <input type="text" name="address" id="address"
                                                autocomplete="address-level2" value="{{ $counter->address ?? '' }}"
                                                placeholder="{{ $counter->address ? '' : 'No hay datos existentes' }}"
                                                maxlength="13"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('address')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="city"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city" autocomplete="city"
                                                maxlength="18" value="{{ $counter->city ?? '' }}"
                                                placeholder="{{ $counter->city ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('city')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="cp"
                                            class="block text-sm font-medium leading-6 text-gray-900">CP</label>
                                        <div class="mt-2">
                                            <input id="cp"  maxlength="5" name="cp" type="text"
                                                value="{{ $counter->cp ?? '' }}"
                                                placeholder="{{ $counter->cp ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @error('cp')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="state"
                                            class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                        <div class="mt-2">
                                            <input id="state" name="state" type="text"
                                                value="{{ $counter->state ?? '' }}"
                                                placeholder="{{ $counter->state ? '' : 'No hay datos existentes' }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @error('state')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="regime_id"
                                            class="block text-sm font-medium leading-6 text-gray-900">Regimen</label>
                                        <div class="mt-2">
                                            <select name="regime_id" id=""
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                
                                                @foreach ($regime as $reg)
                                                    <option value="{{ $reg->id }}"
                                                        {{ $counter->regime_id == $reg->id ? 'selected' : '' }}>
                                                        {{ $reg->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('regime_id')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="birthdate"
                                            class="block text-sm font-medium leading-6 text-gray-900">Fecha de
                                            Nacimiento</label>
                                        <div class="mt-2">
                                            <input type="date" name="birthdate" id="birthdate" min="1900-1-1"
                                                value="{{ $counter->birthdate ?? '' }}"
                                                placeholder="{{ $counter->birthdate ? '' : 'No hay datos existentes' }}"
                                                autocomplete="postal-code"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                            @error('birthdate')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <a href="{{ url()->previous() }}"
                                    class="text-sm font-semibold leading-6 text-gray-900">Cancelar</a>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Actualizar
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
    @push('modals')
        <script>
            const togglePassword = document.getElementById("togglePassword");
            const password = document.getElementById("password");
            togglePassword.addEventListener("click", (e) => {
                const type =
                    password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                e.target.classList.toggle("fa-eye");
            });
        </script>
    @endpush
