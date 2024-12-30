<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use App\Models\Category;
use App\Models\Client;
use App\Models\Receipt;
use Endroid\QrCode\Builder\Builder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class ReceiptController extends Controller
{
    public function index()
    {

        return view('receipts.index');

    }

    public function create()
    {
        $counters = Counter::all();
        $categories = Category::all();
        $clients = Client::all();
        $identificator = Str::random(10);




        return view('receipts.create', compact('counters', 'categories', 'clients', 'identificator'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'counter_id' => 'nullable',
            'client_id' => 'nullable',
            'category_id' => 'nullable',
            'identificator' => 'nullable',
            'qr_path' => 'nullable',
            'pay_method' => 'nullable',
            'mount' => 'nullable',
            'concept' => 'nullable',
        ]);

        

        Receipt::create([
            'counter_id' => $request->counter_id,
            'client_id' => $request->client_id,
            'category_id' => $request->category_id,
            'identificator' => $request->identificator,
            'qr_path' => $request->qr_path,
            'pay_method' => $request->pay_method,
            'mount' => $request->mount,
            'concept' => $request->concept,
        ]);
        return redirect()->route('receipt.create')->with('success', 'Recibo creado exitosamente.');
    }
    public function dompdf()
    {

        return view('dompdf.factura');

    }
    public function generarpdf()
    {

        $pdf = PDF::loadView('dompdf.facturados');
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('factura.pdf');

    }

}
