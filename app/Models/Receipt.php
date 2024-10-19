<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
            'counter_id',
            'client_id',
            'category_id',
            'identificator',
            'pay_method',
            'mount',
            'concept'
    ];

    public function counters()
    {
        $this->belongsTo(Counter::class);
    }

    public function clients()
    {
        $this->belongsTo(Client::class);
    }

    public function categories()
    {
        $this->belongsTo(Category::class);
    }
}

