@extends('layouts.app')

@section('content')
    <div class="py-16 px-4">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('receipt.update', $receipt->id) }}" method="post">
                @csrf
                @method('PUT')
                
                @if (@session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-4 grid-rows-8 gap-4">
                    <div class="col-span-2">
                        <label for="category_id" class="block text-sm font-medium text-gray-900">Tipo de Recibo</label>
                        <div class="mt-1">
                            <select name="category_id" id="category_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $receipt->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
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
                        <label for="counter_id" class="block text-sm font-medium text-gray-900">Realizado por</label>
                        <div class="mt-1">
                            <select name="counter_id" id="counter_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @foreach ($counters as $counter)
                                    <option value="{{ $counter->id }}"
                                        {{ $counter->id == $receipt->counter_id ? 'selected' : '' }}>
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
                            <label for="client_id"
                                class="block text-sm font-medium text-gray-900">Contribuyente</label>
                            <select name="client_id" id="client_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}"
                                        {{ $client->id == $receipt->client_id ? 'selected' : '' }}>
                                        {{ $client->full_name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="label-text-alt mt-1">Selecciona el contribuyente beneficiario</span>
                            @error('client_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-start-3 row-start-2">
                        <label for="pay_method" class="block text-sm font-medium text-gray-900">Metodo de pago </label>
                        <select name="pay_method" id="pay_method"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="EFECTIVO" {{ $receipt->pay_method == 'EFECTIVO' ? 'selected' : '' }}>Efectivo
                            </option>
                            <option value="CHEQUE" {{ $receipt->pay_method == 'CHEQUE' ? 'selected' : '' }}>Cheque</option>
                            <option value="TRANSFERENCIA" {{ $receipt->pay_method == 'TRANSFERENCIA' ? 'selected' : '' }}>
                                Transferencia Bancaria</option>
                        </select>
                        <span class="label-text-alt">Porfavor seleccione el metodo de pago</span>
                        @error('pay_method')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-start-4 row-start-2 mb-8">
                        <label for="mount" class="block text-sm font-medium text-gray-900">Monto $MXN</label>
                        <input type="number" name="mount" value="{{ $receipt->mount }}"
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Escribe el monto" step="0.01">
                        <span class="label-text-alt mb-2">Escribe el monto en numero</span>
                        @error('mount')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-start-1 row-start-3 col-span-2 mt-1">
                        <label for="description" class="block text-sm font-medium text-gray-900">Descripción</label>
                        <input type="text" name="description" value="{{ $receipt->category->description }}"
                            oninput="this.value = this.value.toUpperCase();"
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Escribe el monto" step="0.01">
                        <span class="label-text-alt mb-2">Escribe la descripción</span>
                        @error('mount')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2 col-start-3 row-start-3">
                        <label for="identificator" class="block text-sm font-medium text-gray-900">Fecha de pago</label>
                        <input name="payment_date" type="date" value="{{ $receipt->payment_date }}"
                            class="input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1">
                        <span class="label-text-alt ml-1">Porfavor introduce la fecha de pago</span>
                        @error('payment_date')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    @if ($receipt->status == 'PENDIENTE')
                        <div class="col-start-1 row-start-4 col-span-2 mt-1">
                            <label for="" class="block text-sm font-medium text-gray-900">Estado</label>
                            <select name="status" id=""
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="PAGADO" {{ $receipt->status == 'PAGADO' ? 'selected' : '' }}>Pagado</option>
                                <option value="PENDIENTE" {{ $receipt->status == 'PENDIENTE' ? 'selected' : '' }}>Pendiente
                                </option>
                                <option value="CANCELADO" {{ $receipt->status == 'CANCELADO' ? 'selected' : '' }}>Cancelado
                                </option>
                            </select>
                            <span class="label-text-alt ml-1">Porfavor introduce el estado del recibo</span>
                            @error('status')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                    <div class="col-start-4 row-start-5 col-span-2 mt-1  flex gap-4">
                        <a href="{{ url()->previous() }}" class="btn btn-soft btn-secondary ">Cancelar</a>
                        @if ($receipt->status == 'PENDIENTE')
                        <button type="submit" class="btn btn-soft btn-accent">Actualizar</button>
                        @endif

                    </div>



                </div>
            </form>
        </div>
    </div>
@endsection
