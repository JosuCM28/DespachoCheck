<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use App\Models\Regime;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\ReceiptMail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PDFMaker extends Controller
{
    public function downloadPDF($id){

        $receipt = Receipt::findOrFail($id);


        $url = route('receipt.verify', $receipt->identificator);
        $pdf = Pdf::loadView('dompdf.factura', compact('receipt', 'url' ))->setPaper('a4','landscape');
        
        return $pdf->download('recibo.pdf');
    }
    public function sendPDF($id){
        
        $receipt = Receipt::findOrFail($id);
        $url = route('receipt.verify', $receipt->identificator);
        $pdf = Pdf::loadView('dompdf.factura', compact('receipt', 'url' ))->setPaper('a4','landscape')->output();

        Mail::to($receipt->client->email)->send(new ReceiptMail($receipt, $pdf));
        
        return redirect()->route('receipt.index')->with('sucess','Recibo enviado Exitosamente a ' . $receipt->client->email . '.');
    }



}

