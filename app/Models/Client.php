<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =
    [
        'counter_id',
        'name',
        'last_name',
        'phone',
        'address',
        'city',
        'state',
        'cp',
        'birthdate',
        'status',
        'rfc',
        'curp',
        'birthdate',
        'city'
    ];

    public function counters()
    {
        $this->belongsTo(Counter::class);
    }

    public function receipts()
    {
        $this->hasMany(Receipt::class);
    }   
}
