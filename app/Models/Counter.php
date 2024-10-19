<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'rfc',
        'curp',
        'birthdate',
        'city'
    ];

    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function receipts() {
        return $this->hasMany(Receipt::class);
    }
}
