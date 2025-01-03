@extends('layouts.app')

@section('content')
    <div class="py-16 px-4">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 grid-rows-8 gap-4 ">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-900">Tipo de Recibo</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->category->name }}</p>
                    </div>
                </div>
                <div class="col-span-2 col-start-3">
                    <label class="block text-sm font-medium text-gray-900">Realizado por</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->counter->full_name }}</p>
                    </div>
                </div>
                <div class="col-span-2 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Contribuyente</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->client->full_name }}</p>
                    </div>
                </div>
                <div class="col-start-3 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Metodo de pago</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ ucfirst($receipt->pay_method) }}</p>
                    </div>
                </div>
                <div class="col-start-4 row-start-2">
                    <label class="block text-sm font-medium text-gray-900">Monto $MXN</label>
                    <div class="mt-2">
                        <p class="text-gray-900">${{ number_format($receipt->mount, 2) }}</p>
                    </div>
                </div>
                <div class="col-span-2 row-start-3">
                    <label class="block text-sm font-medium text-gray-900">Fecha del recibo a pagar</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->concept }}</p>
                    </div>
                </div>
                <div class="col-span-2 col-start-3 row-start-3">
                    <label class="block text-sm font-medium text-gray-900">Fecha de pago</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->payment_date->format('d/m/Y') }}</p>
                    </div>
                </div>
                <div class="col-span-2 col-start-1 row-start-4">
                    <label class="block text-sm font-medium text-gray-900">Estado</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ ucfirst($receipt->status) }}</p>
                    </div>
                </div>
                <div class="col-span-2 col-start-3 row-start-4">
                    <label class="block text-sm font-medium text-gray-900">Identificador</label>
                    <div class="mt-2">
                        <p class="text-gray-900">{{ $receipt->identificator }}</p>
                    </div>
                </div>
                <div class="grid col-start-end mt-4">
                    <a href="{{ route('receipts.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
