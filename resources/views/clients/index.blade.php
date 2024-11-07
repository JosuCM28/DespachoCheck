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
                            <div>
                                @if (@session('success'))
                                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h2 class="text-lg font-bold mb-3">Clientes</h2>
                                <div class="flex justify-between mb-8 items-center"> 
                                    <p class="text-gray-500">Lista de todos los Clientes existentes</p>
                                    <a href="{{route('client.create')}}" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
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
                                  @foreach ($clients as $client)
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$client->name . " " . $client->last_name}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$client->email}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$client->city}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                      <div class="flex gap-3 justify-end items-center">
                                      <a href="#"><i class="fa-regular fa-eye"></i></a>
                                      <form onsubmit="return confirm('¿Estás seguro de borrar esto?')" action="{{ route('counter.destroy', $client->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button><i class="fa-solid fa-trash-can text-red-500" title="Borrar"></i></button>
                                      </form>
                                      <a href="#"><i class="fa-regular fa-pen-to-square" style="color: #FFD43B;"></i></a>
                                      </div>
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
@endsection


