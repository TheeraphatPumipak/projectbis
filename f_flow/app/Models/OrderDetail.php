<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'idOrder_Detail';
    protected $fillable = ['amount', 'order_detail', 'product_warehouse_idSku', 'order_idOrder'];

    public function order() {
        return $this->belongsTo(Order::class, 'order_idOrder');
    }

    public function productWarehouse() {
        return $this->belongsTo(ProductWarehouse::class, 'product_warehouse_idSku');
    }
}