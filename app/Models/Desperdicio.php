<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Desperdicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'escola',
        'quantidade',
        'descricao',
    ];
}
