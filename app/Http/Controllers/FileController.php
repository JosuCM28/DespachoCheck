<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Client;

class FileController extends Controller
{
    public function store(Request $request, Client $client)
    {
        $path = $request->file('file_path')->store('files','public');
        $clientId = $client->id;
        $document = new Document();
        $document->client_id = $clientId;
        $document->title = $request->input('title');
        $document->file_path = $path;
        
        $document->save();
return back();
    }
}