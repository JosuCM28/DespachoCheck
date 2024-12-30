<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    // Define los campos que se pueden asignar en masa
    protected $fillable = [
        'client_id',
        'counter_id',
        'title',
        'sipare',
        'idse',
        'siec',
        'useridse',
        'usersipare',
        'content',
    ];




    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function counter()
    {
        return $this->belongsTo(Counter::class);
    }
}
