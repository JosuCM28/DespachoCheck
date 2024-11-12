<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regime extends Model
{
    protected $fillable = [
        'title',
    ];


public function client()
    {
        return $this->hasMany(Client::class);
    }
    
    public function counter()
    {
        return $this->hasMany(Counter::class);
    }


}