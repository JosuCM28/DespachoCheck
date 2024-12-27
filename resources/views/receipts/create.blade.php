@extends('layouts.app')

@section('content')
    <div class="py-16 px-4">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="">
                <div class="grid grid-cols-4 grid-rows-7 gap-4 ">
                    <div class="col-span-2">
                        <label for="categories" class="block text-sm font-medium text-gray-900">Tipo de Recibo</label>
                        <div class="mt-2">
                            <select name="category_id" id="category_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}" class="text-gray-900">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="label-text-alt">Porfavor seleccione el tipo de recibo</span>
                            @error('category_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-2 col-start-3">
                        <label for="categories" class="block text-sm font-medium text-gray-900">Realizado por</label>
                        <div class="mt-2">
                            <select name="counter_id" id="counter_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @foreach ($counters as $counter)
                                    <option value="{{ $counter->full_name }}" class="text-gray-900">
                                        {{ $counter->full_name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="label-text-alt">Seleccione el contador que realiza el recibo</span>
                            @error('counter_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-2 row-start-2">
                        <div class="flex flex-col">
                            <label for="exampleDataList"
                                class="block text-sm font-medium text-gray-900"">Contribuyente</label>
                            <input name="client_id"
                                class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1"
                                list="clientlistOptions" id="clientsDataList" placeholder="Escribe y busca..." />
                            <datalist id="clientlistOptions">
                                @foreach ($clients as $client)
                                    <option value="{{ $client->full_name }}" class="text-gray-900">{{ $client->full_name }}
                                    </option>
                                @endforeach
                            </datalist>
                            <span class="label-text-alt">Selecciona el contribuyente beneficiario</span>
                        </div>
                    </div>
                    <div class="col-start-3 row-start-2">
                        <label for="pay_method" class="block text-sm font-medium text-gray-900">Metodo de pago </label>
                        <input list="methodlistOptions" id="methodDataList" name="pay_method" type="text" id="pay_method"
                            placeholder="Escribe el metodo..."
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1">
                        <datalist id="methodlistOptions">
                            <option value="Efectivo"></option>
                            <option value="Transferencia Bancaria"></option>
                            <option value="Cheque"></option>

                        </datalist>
                        <span class="label-text-alt">Porfavor seleccione el metodo de pago</span>
                    </div>
                    <div class="col-start-4 row-start-2">
                        <label for="" class="block text-sm font-medium text-gray-900">Monto $MXN</label>
                        <input type="number" name="mount"
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1"
                            id="mount" name="mount" placeholder="Escribe el monto">
                        <span class="label-text-alt">Escribe el monto en numero</span>
                    </div>
                    <div class="col-span-2 row-start-3">
                        <label for="">Fecha del recibo a pagar <span>
                                <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="transparent-modal" data-overlay="#transparent-modal"><span class="icon-[rivet-icons--question-mark]" style="width: 12px; height: 12px; color: #6499ff;"></span></button>

                                <div id="transparent-modal"
                                    class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
                                    tabindex="-1">
                                    <div class="modal-dialog overlay-open:opacity-100">
                                        <div class="modal-content text-neutral-content bg-transparent shadow-none">
                                            <div class="modal-header">
                                                <h3 class="modal-title text-neutral-content">¿Como ingresar correctamente la fecha?</h3>
                                                <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3"
                                                    aria-label="Close" data-overlay="#transparent-modal">
                                                    <span class="icon-[tabler--x] size-4"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Para que se visualize de una manera correcta en el recibo generado, lo que debemos escribir es la fecha con la estuctura mes/año, de la siguiente manera: Mes de (mes) del (año) ejemplo: <br>MES DE MARZO DEL 2023 <br>MES DE JUNIO DEL 2027 <br>MES DE DICIEMBRE DEL 2030 <br> MES DE ENERO DEL 2040
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-overlay="#transparent-modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span></label>
                        <input name="concept" type="text"
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1">
                        <span class="label-text-alt">Escribe la fecha del pago (mes/año)</span>
                    </div>
                    <div class="col-span-2 col-start-3 row-start-3">
                        <label for="identificator" class="block text-sm font-medium text-gray-900">Identificador</label>
                        <input name="identificator" type="text" value="{{$identificator}}" readonly class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1">
                        <span class="label-text-alt ml-1" >El identificador sirve para llevar el control de los recibos</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
