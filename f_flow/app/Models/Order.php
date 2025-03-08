<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'idOrder';
    protected $fillable = ['customers_idCustomers', 'amount', 'status', 'price', 'total'];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customers_idCustomers');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'order_idOrder');
    }
}
