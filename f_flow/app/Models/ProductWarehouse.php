<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ProductWarehouse extends Model {
    use HasFactory;
    protected $table = 'product_warehouses';
    protected $primaryKey = 'idSku';
    protected $fillable = ['lot', 'detail', 'cost', 'amount', 'sale', 'product_idProduct'];

    public function product() {
        return $this->belongsTo(Product::class, 'product_idProduct');
    }
}