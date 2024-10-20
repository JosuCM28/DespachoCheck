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
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                          <div class="p-1.5 min-w-full inline-block align-middle">
                            <div>
                                @if (@session('success'))
                                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h2 class="text-lg font-bold mb-3">Contadores</h2>
                                <div class="flex justify-between mb-8 items-center"> 
                                    <p class="text-gray-500">Lista de todos los contadores existentes</p>
                                    <a href="{{route('counter.create')}}" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                                </div>
                            </div>
                            <div class="overflow-hidden">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nombre</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Correo</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Ciudad</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Acción</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                  @foreach ($counters as $counter)
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$counter->name . " " . $counter->last_name}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$counter->email}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$counter->city}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                      <a href="{{route('counter.show', $counter->id)}}">Ver</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
</x-app-layout>
