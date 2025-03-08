<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model {
    use HasFactory;
    protected $table = 'platforms';
    protected $primaryKey = 'idPlatform';
    protected $fillable = ['platformName'];

    public function customers() {
        return $this->hasMany(Customer::class, 'platform_idPlatform');
    }
}