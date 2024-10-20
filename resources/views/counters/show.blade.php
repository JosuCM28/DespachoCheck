<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bienvenido {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto p-14">
                    <div class="pb-14">
                        <p class="text-center font-bold text-2xl">{{ $counter->name . " " . $counter->last_name}} </p>
                    </div>

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion personal</h2>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->email }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last_name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->city }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">CURP</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->curp }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">RFC</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->rfc }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 sm:col-start-1">
                                    <label for="rfc"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fecha de
                                        nacimiento</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->birthdate }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="curp" class="block text-sm font-medium leading-6 text-gray-900">No.
                                        de clientes</label>
                                    <div class="mt-2">
                                        <p> {{ $counter->clients->count() }} </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('counter.index') }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancelar</a>
                            <a href="{{route('counter.edit', $counter->id)}}" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
