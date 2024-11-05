<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    class Document extends Model
{
    protected $fillable = ['title', 'file_path', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
class Client extends Model
{
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}


