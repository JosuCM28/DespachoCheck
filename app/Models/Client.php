<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Counter;

class Client extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'counter_id',
        'name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'cp',
        'birthdate',
        'status',
    ];

    /**
     * Relación con el modelo `User`.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el modelo `Counter`.
     *
     * @return BelongsTo
     */
    public function counter(): BelongsTo
    {
        return $this->belongsTo(Counter::class);
    }
}
