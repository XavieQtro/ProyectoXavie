<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteClase extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'clase_id',
    ];
}
