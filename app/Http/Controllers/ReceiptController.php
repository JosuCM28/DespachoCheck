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
use Illuminate\Support\Carbon;
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
        $receipt = Receipt::findOrFail($identificator);
        return view('receipts.show', compact('receipt'));
    }

    public function edit($receipt){

        $receipt = Receipt::findOrFail($receipt);
        $receipt->payment_date = Carbon::parse($receipt->payment_date)->format('Y-m-d');
        $categories = Category::all();
        $counters = Counter::all();
        $clients = Client::all();
        return view ('receipts.edit', compact('receipt', 'categories','counters','clients'));

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
            'mount' => 'required',
            'concept' => 'required|string',
            'status' => 'required|string',
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
            $pdf = Pdf::loadView('dompdf.factura', compact('receipt', 'url'))->setPaper('a4', 'landscape')->output();


            Mail::to($receipt->client->email)->send(new ReceiptMail($receipt, $pdf));




            return redirect()->route('receipt.create')->with('success', 'Recibo creado y enviado exitosamente.');
        }
        return redirect()->route('receipt.create')->with('success', 'Recibo creado exitosamente.');


    }

    public function update(Request $request, Receipt $receipt){
        
        
        $request->validate([
            'counter_id' => 'required|exists:counters,id',
            'client_id' => 'required|exists:clients,id',
            'category_id' => 'required|exists:categories,id',
            'payment_date' => 'required|string',
            'pay_method' => 'required|string',
            'mount' => 'required',
            'description' => 'required|string',
            'status' => 'required|string',
            
        ]);
        $receipt->update($request->all());
        return redirect()->route('receipt.show', ['identificator' => $receipt->id])->with('success','Recibo Actualizado Correctamente');



    }
    public function destroy(Receipt $receipt){

        $receipt = Receipt::findOrFail($receipt->id);
        $receipt->delete();
        return redirect()->route('receipt.index')->with('success','Recibo Borrado Exitosamente');


    }
    public function destroydos(Receipt $receipt2){

        $receipt = Receipt::findOrFail($receipt2->id);
        $receipt->delete();
        return redirect()->refresh()->with('success','Recibo Borrado Exitosamente');


    }


}
