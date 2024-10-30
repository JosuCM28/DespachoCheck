<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Counter;
use App\Models\Client;
use App\Models\Category;

class Receipt extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'counter_id',
        'client_id',
        'category_id',
        'identificator',
        'pay_method',
        'mount',
        'concept',
    ];

    /**
     * Relación con el modelo `Counter`.
     * Un recibo pertenece a un contador.
     *
     * @return BelongsTo
     */
    public function counter(): BelongsTo
    {
        return $this->belongsTo(Counter::class);
    }

    /**
     * Relación con el modelo `Client`.
     * Un recibo pertenece a un cliente.
     *
     * @return BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Relación con el modelo `Category`.
     * Un recibo pertenece a una categoría.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
