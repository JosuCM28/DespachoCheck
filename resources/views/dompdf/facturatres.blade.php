@extends('layouts.appHome')

@section('content')
   <div class="container flex justify-center items-center my-16 mx-auto"
    style="width: 100%; height: 100vh; ">
    <div id="pdfirst" class="bg-white border border-gray-300 shadow-md p-8"
        style="box-sizing: border-box; width: 100%; max-width: 190mm;">

        <div class="flex justify-between items-center mb-4">
            <div>
                <img src="{{ asset('img/fondodesp.png') }}" alt="Logo" class="h-16"
                    style="height: 64px; width: 64px;">
            </div>
            <div class="text-right">
                <p class="font-bold text-lg">COMPROBANTE DE PAGO REALIZADO POR INTERNET</p>
                <p>CPRI</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 border-t border-b border-gray-300 py-3">
            <div>
                <h3 class="font-bold" style="color:blue;">EMISOR DEL COMPROBANTE FISCAL</h3>
                <p><span class="font-bold">R.F.C. - NOMBRE O RAZÓN SOCIAL</span></p>
                <p style="color:blue;">BAMT660908883 - TERESA DE JESÚS BALTAZAR MONTES</p>
                <p class="text-xs"><span class="font-bold text-xs">Régimen Fiscal:</span> 626 - Régimen Simplificado de
                    Confianza</p>
                <p class="text-xs"><span class="font-bold text-xs">Domicilio Fiscal:</span> ABASOLO 37 SN COL. CENTRO,
                    C.P. 93700, Altotonga, Veracruz, México </p>
            </div>

            <div>
                <h3 class="font-bold" style="color:red;">RECEPTOR DEL COMPROBANTE FISCAL</h3>
                <p><span class="font-bold">R.F.C. - NOMBRE O RAZÓN SOCIAL</span></p>
                <p style="color:red;">BAMT660908883 - TERESA DE JESÚS BALTAZAR MONTES</p>
                <p class="text-xs"><span class="font-bold text-xs">C.P:</span> 93700</p>
                <p class="text-xs"><span class="font-bold text-xs">Régimen Fiscal:</span> 626 - Régimen Simplificado
                    de Confianza</p>
            </div>
        </div>
        <div>
            <p class="text-xs"> <span class="font-bold text-xs">FECHA DE EMISIÓN:</span> 2024-10-01</p>
            <p class="text-xs"> <span class="font-bold text-xs">No. Comprobante:</span> ID</p>
            <p class="text-xs"> <span class="font-bold text-xs">TIPO DE COMPROBANTE:</span> 2024-10-01</p>
            <p class="text-xs"> <span class="font-bold text-xs">EXPEDIDO EN:</span> 93700</p>
            <p class="text-xs"> <span class="font-bold text-xs">EXPORTACIÓN:</span> 2024-10-01</p>
        </div>

        <div class="mt-4">
            <h3 class="font-bold">PRODUCTOS/SERVICIOS</h3>
            <table class="w-full border border-gray-300 text-left text-sm mt-2">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-2 py-1">Código</th>
                        <th class="border border-gray-300 px-2 py-1">Identificador</th>
                        <th class="border border-gray-300 px-2 py-1">Producto/Servicio</th>
                        <th class="border border-gray-300 px-2 py-1">Unidad</th>
                        <th class="border border-gray-300 px-2 py-1">Cantidad</th>
                        <th class="border border-gray-300 px-2 py-1">Precio</th>
                        <th class="border border-gray-300 px-2 py-1">Importe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-2 py-1">001</td>
                        <td class="border border-gray-300 px-2 py-1">84111500</td>
                        <td class="border border-gray-300 px-2 py-1">PAGO DE CAJA DE AHORRO DEL MES DE OCTUBRE Y
                            NOVIEMBRE 2024 </td>
                        <td class="border border-gray-300 px-2 py-1">E48</td>
                        <td class="border border-gray-300 px-2 py-1">1</td>
                        <td class="border border-gray-300 px-2 py-1">$2,068.97</td>
                        <td class="border border-gray-300 px-2 py-1">$2,068.97</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-4">
            <div>
                <h3 class="font-bold">DETALLES DE PAGO</h3>
                <p><span class="font-bold">Forma de Pago:</span>Transferencia electrónica de fondos</p>
                <p><span class="font-bold">Condiciones de Pago:</span> Contado</p>
                <p><span class="font-bold">Moneda:</span> MXN</p>
                <p><span class="font-bold">Cantidad:</span> 1.00</p>
            </div>
            <div class="text-right">
                <h3 class="font-bold">TOTALES</h3>
                <p><span class="font-bold">Subtotal:</span> $2,068.97</p>
                <p><span class="font-bold">IVA 16%:</span> $0</p>
                <p><span class="font-bold">Total:</span> <span class="text-lg font-bold">$2,400.00</span></p>
            </div>
        </div>

        <div class="mt-4">
            <img src="{{ asset('images/qr-code.png') }}" alt="QR Code" style="height: 48px;">
        </div>

        <div class="text-center text-xs text-gray-500 mt-6">
            <p>ESTE DOCUMENTO ES UNA REPRESENTACIÓN IMPRESA DE UN CFDI</p>
        </div>
    </div>
</div>

@endsection
