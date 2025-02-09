@extends('layouts.app')

@section('content')
    <div class="py-16 px-4">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (@session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="grid grid-cols-4 grid-rows-8 gap-4">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-900">Tipo de Recibo</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->category->name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 col-start-3">
                    <label class="block text-sm font-medium text-gray-900">Realizado por</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->counter->full_name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Contribuyente</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->client->full_name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-start-3 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Método de pago</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->pay_method }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-start-4 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Monto $MXN</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ number_format($receipt->mount, 2) }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 row-start-3">
                    <label class="block text-sm font-medium text-gray-900">Fecha del recibo</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->concept }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 row-start-3">
                    <label class="block text-sm font-medium text-gray-900">Fecha de pago</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->payment_date }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 col-start-1 row-start-4">
                    <label class="block text-sm font-medium text-gray-900">Estado</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->status }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 row-start-4">
                    <label class="block text-sm font-medium text-gray-900">Identificador</label>
                    <div class="mt-2">
                        <input type="text" readonly value="{{ $receipt->identificator }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="mt-4 flex justify-end col-span-4 gap-x-6 pb-4 pr-3">
                    <a href="{{ route('receipt.index') }}" class="btn btn-soft btn-secondary">Cancelar</a>
                    @if ($receipt->status == 'PENDIENTE')
                    <a href="{{ route('receipt.edit', $receipt->id) }}" class="btn btn-soft btn-accent">Editar</a>
                    @endif
                </div>
            </div>


        </div>
    </div>
@endsection
