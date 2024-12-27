<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use Str;

class ReceiptController extends Controller
{
    public function index(){

    return view('receipts.index');

    }

    public function create(){
        $counters = Counter::all();
        $categories = Category::all();
        $clients = Client::all();
        $identificator = Str::random(8);

        return view('receipts.create', compact('counters', 'categories','clients','identificator'));
    }

    public function dompdf(){
    return view('dompdf.factura');

    }
}
