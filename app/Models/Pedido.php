<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable =['cliente_id','total','fecha','estatus'];

    // un pedido pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // un Pedido pertenece a un pedido
    public function pedidodetalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }
}
