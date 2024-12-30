<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Recibo - DOMPDF</title>

    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
            color: #555;
        }

        .invoice-box {
            width: 220mm;
            height:180mm;
            padding: 5px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            margin: auto;
            box-sizing: border-box;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 25px;
            line-height: 25px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 15px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            text-align: center;
        }

        .invoice-box table tr.details td {
            padding-bottom: 15px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        h3 {
            margin: 5px 0;
            font-size: 14px;
        }

        p {
            margin: 2px 0;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            font-size: 10px;
            color: #999;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                @php
                                    $path = public_path('img/fondodesp.png');
                                    $imageData = base64_encode(file_get_contents($path));
                                    $src = 'data:image/png;base64,' . $imageData;
                                @endphp
                                <img src="{{ $src }}" alt="Logo">
                            </td>
                            <td>
                                <div class="text-right">
                                    <p>COMPROBANTE DE PAGO REALIZADO POR INTERNET</p>
                                    <p>CPRI</p>
                                    <p><strong>FECHA DE EMISIÓN:</strong> 2024-10-01</p>
                                    <p><strong>No. Comprobante:</strong> ID</p>
                                    <p><strong>TIPO DE COMPROBANTE:</strong> 2024-10-01</p>
                                    <p><strong>EXPEDIDO EN:</strong> 93700</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <h3 style="color:blue;">EMISOR DEL COMPROBANTE FISCAL</h3>
                                <p><strong>R.F.C. - NOMBRE O RAZÓN SOCIAL:</strong></p>
                                <p style="color:blue;">BAMT660908883 - TERESA DE JESÚS BALTAZAR MONTES</p>
                                <p><strong>Régimen Fiscal:</strong> 626 - Régimen Simplificado de Confianza</p>
                                <p><strong>Domicilio Fiscal:</strong> ABASOLO 37 SN COL. CENTRO, C.P. 93700, Altotonga, Veracruz, México</p>
                            </td>
                            <td>
                                <h3 style="color:red;">RECEPTOR DEL COMPROBANTE FISCAL</h3>
                                <p><strong>R.F.C. - NOMBRE O RAZÓN SOCIAL:</strong></p>
                                <p style="color:red;">BAMT660908883 - TERESA DE JESÚS BALTAZAR MONTES</p>
                                <p><strong>C.P:</strong> 93700</p>
                                <p><strong>Régimen Fiscal:</strong> 626 - Régimen Simplificado de Confianza</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <h3>PRODUCTOS/SERVICIOS</h3>
                    <table>
                        <thead>
                            <tr class="heading">
                                <td>Código</td>
                                <td>Identificador</td>
                                <td>Producto/Servicio</td>
                                <td>Unidad</td>
                                <td>Cantidad</td>
                                <td>Precio</td>
                                <td>Importe</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="item">
                                <td>001</td>
                                <td>84111500</td>
                                <td>PAGO DE CAJA DE AHORRO DEL MES DE OCTUBRE Y NOVIEMBRE 2024</td>
                                <td>E48</td>
                                <td>1</td>
                                <td>$2,068.97</td>
                                <td>$2,068.97</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>DETALLES DE PAGO</h3>
                    <p><strong>Forma de Pago:</strong> Transferencia electrónica de fondos</p>
                    <p><strong>Condiciones de Pago:</strong> Contado</p>
                    <p><strong>Moneda:</strong> MXN</p>
                    <p><strong>Cantidad:</strong> 1.00</p>
                </td>
                <td>
                    <div class="text-right">
                        <h3>TOTALES</h3>
                        <p><strong>Subtotal:</strong> $2,068.97</p>
                        <p><strong>IVA 16%:</strong> $0</p>
                        <p><strong>Total:</strong> <span>$2,400.00</span></p>
                    </div>
                </td>
            </tr>
        </table>

        <div class="qr-code">
            <img src="{{ asset('images/qr-code.png') }}" alt="QR Code">
        </div>

        <div class="footer">
            <p>ESTE DOCUMENTO ES UNA REPRESENTACIÓN IMPRESA DE UN CFDI</p>
        </div>
    </div>
</body>

</html>
