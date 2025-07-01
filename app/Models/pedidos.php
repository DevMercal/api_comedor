<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    /** @use HasFactory<\Database\Factories\PedidosFactory> */
    use HasFactory;

    protected $fillable = [
        'numero_pedido',
        'metodo_pago_id',
        'referencia',
        'monto_total',
        'id_menu',
        'id_empleado'
    ];
}
