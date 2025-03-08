<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model {
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'idCustomers';
    protected $fillable = ['customerName', 'platform_idPlatform'];

    public function platform() {
        return $this->belongsTo(Platform::class, 'platform_idPlatform');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'customers_idCustomers');
    }
}
