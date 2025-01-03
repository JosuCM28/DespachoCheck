<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use App\Models\Category;
use App\Models\Client;
use App\Models\Receipt;
use App\Mail\ReceiptMail;
use Endroid\QrCode\Builder\Builder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
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
        $identificator = Str::uuid();



        return view('receipts.create', compact('counters', 'categories', 'clients', 'identificator'));
    }
    public function show($identificator)
    {
        $ident = Receipt::where('identificator', $identificator)->first();
        return view('receipts.show',compact('ident'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'counter_id' => 'required|exists:counters,id',
            'client_id' => 'required|exists:clients,id',
            'category_id' => 'required|exists:categories,id',
            'identificator' => 'required|string|max:255|unique:receipts',
            'payment_date' => 'required|date',
            'pay_method' => 'required|string',
            'mount' => 'required|numeric',
            'concept' => 'required|string',
            'status' => 'required|string|in:pending,paid,canceled',
        ]);



        $receipt = Receipt::create([
            'counter_id' => $request->input('counter_id'),
            'client_id' => $request->input('client_id'),
            'category_id' => $request->input('category_id'),
            'identificator' => $request->input('identificator'),
            'payment_date' => $request->input('payment_date'),
            'pay_method' => $request->input('pay_method'),
            'mount' => $request->input('mount'),
            'concept' => $request->input('concept'),
            'status' => $request->input('status'),
        ]);

        if ($request->input('action') == 'send') {

            $url = route('receipt.verify', $receipt->identificator);
            $pdf = Pdf::loadView('dompdf.factura', compact('receipt', 'url'));


            Mail::to($receipt->client->email)->send(new ReceiptMail($receipt, $pdf));



            return redirect()->route('receipt.create')->with('success', 'Recibo creado y enviado exitosamente.');
        }
        return redirect()->route('receipt.create')->with('success', 'Recibo creado exitosamente.');
    }

}
