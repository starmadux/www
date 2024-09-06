<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod-ped',
        'cliente',
        'produto',
        'quant',
        'valor_ped',
        'valor_desc',
    ];
}
