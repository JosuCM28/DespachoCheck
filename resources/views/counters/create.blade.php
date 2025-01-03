@extends('layouts.app')
@section('content')
<div class="py-12">
    @include('layouts.list.sidebar')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto p-12">
                <form action="{{route('counter.store')}}" method="post">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion personal</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Ingresa los datos de un nuevo Contador</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nombre<span class="text-red-500">*</span></label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="name" id="name" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <span class="label-text-alt">Porfavor escribe los nombres</span>
                                        @error('name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last_name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Apellido<span class="text-red-500">*</span></label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="last_name" id="last_name" autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe los apellidos</span>
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
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe el correo</span>
                                        @error('email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="password"
                                        class="block text-sm font-medium leading-6 text-gray-900">Contraseña<span class="text-red-500">*</span></label>
                                    <div class="mt-2">
                                        <input id="password" name="password" type="password" value="{{$password}}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><i
                                            class="fa-regular fa-eye-slash" style="color: #181716;"
                                            id="togglePassword"></i>
                                            <span class="label-text-alt">Verifica o edita la contraseña</span>
                                        @error('password')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2 sm:col-start-1">
                                    <label for="rfc"
                                        class="block text-sm font-medium leading-6 text-gray-900">RFC</label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="rfc" id="rfc" autocomplete="address-level2"
                                            maxlength="13"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe el RFC</span>
                                        @error('rfc')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">CURP</label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="curp" id="curp" autocomplete="curp" maxlength="18"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe el CURP</span>
                                        @error('curp')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="phone"
                                        class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                                    <div class="mt-2">
                                        <input id="phone" name="phone" type="number" oninput="this.value = this.value.slice(0, 10);"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <span class="label-text-alt">Porfavor escribe el numero de telefono</span>
                                        @error('phone')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-2 sm:col-start-1">
                                    <label for="address"
                                        class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="address" id="address" autocomplete="address-level2"
                                            maxlength="13"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe la direccion</span>
                                        @error('address')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                                    <div class="mt-2">
                                        <input type="text" oninput="this.value = this.value.toUpperCase();" name="city" id="city" autocomplete="city" maxlength="18"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor escribe la ciudad</span>
                                        @error('city')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="cp" class="block text-sm font-medium leading-6 text-gray-900">CP</label>
                                    <div class="mt-2">
                                        <input id="cp" name="cp" oninput="this.value = this.value.slice(0, 5);" type="text"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <span class="label-text-alt">Porfavor escribe el CP</span>      
                                        @error('cp')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="state"
                                        class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                    <div class="mt-2">
                                        <input id="state" oninput="this.value = this.value.toUpperCase();" name="state" type="text"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <span class="label-text-alt">Porfavor escribe el estado</span>
                                        @error('state')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="regime_id"
                                        class="block text-sm font-medium leading-6 text-gray-900">Regimen</label>
                                    <div class="mt-2">
                                       <select name="regime_id" oninput="this.value = this.value.toUpperCase();" id="regime_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="">Seleccione un régimen</option>
                                            @foreach ($regimes as $regime)
                                            <option value="{{ $regime->id }}">{{ $regime->title }}</option>
                                            @endforeach
                                        </select>

                                        @error('regimen')
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
                                            autocomplete="postal-code"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <span class="label-text-alt">Porfavor digite la fecha de nacimiento</span>
                                        @error('birthdate')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pb-2 flex items-center justify-end gap-x-6">
                            <a href="#" onclick="history.back()" class="btn btn-soft btn-secondary">Cancelar</a>
                            <button type="submit"
                                class="btn btn-soft btn-accent">Guardar</button>
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