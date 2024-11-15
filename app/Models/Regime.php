<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regime extends Model
{
    use HasFactory;
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