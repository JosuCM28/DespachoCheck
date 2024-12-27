@extends('layouts.app')

@section('content')
    <div class="py-1">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto p-6 bg-white border border-gray-200 shadow-md">
        <!-- Header -->
        <div class="flex justify-between items-center border-b-2 border-gray-300 pb-4 mb-4">
            <img src="{{ asset('img/fondodesp.png') }}" alt="Logo" style="width: 8rem; height:10rem;">
            <div class="text-right">
                <h1 class="text-lg font-bold">Despacho Contable Baltazar Montes</h1>
                <p class="text-sm">Dirección de la Empresa</p>
                <p class="text-sm">Teléfono: 123-456-7890</p>
                <p class="text-sm">Correo: ejemplo@empresa.com</p>
            </div>
        </div>

        <!-- Información del Recibo -->
        <div class="mb-6">
            <div class="flex justify-between text-sm mb-2">
                <p><span class="font-semibold">Recibo ID:</span> Numero del recibo</p>
                <p><span class="font-semibold">Fecha:</span> Fecha de creado</p>
            </div>
            <div class="flex justify-between text-sm">
                <p><span class="font-semibold">Cliente:</span> Nombre del cliente</p>
                <p><span class="font-semibold">Método de Pago:</span> Efectivo metodo de pago</p>
            </div>
        </div>

        <!-- Detalle del Recibo -->
        <table class="w-full text-sm text-left border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Concepto</th>
                    <th class="border border-gray-300 px-4 py-2">Categoría</th>
                    <th class="border border-gray-300 px-4 py-2">Identificador</th>
                    <th class="border border-gray-300 px-4 py-2">Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 truncatepdf flex items-center justify-center"><textarea rows="2" cols="35" class="border border-white mt-2 text-aling-center" style="resize: none;">PAGO DE CAJA DE AHORRO DEL MES DE SEPTIEMBRE DEL 2024</textarea></td>
                    <td class="border border-gray-300 px-4 py-2">Tipo de pago</td>
                    <td class="border border-gray-300 px-4 py-2">Identificador</td>
                    <td class="border border-gray-300 px-4 py-2">monto</td>
                </tr>
            </tbody>
        </table>

        <!-- Footer -->
        <div class="text-center text-sm text-gray-600 mt-6">
            <p>¡Gracias por su preferencia!</p>
            <p>Este recibo es válido sin firma.</p>
            <p>Por cualquier duda, contáctenos.</p>
        </div>
    </div>
        </div>
    </div>
@endsection
