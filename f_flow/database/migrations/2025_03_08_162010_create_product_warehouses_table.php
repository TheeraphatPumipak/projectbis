<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductWarehousesTable extends Migration {
    public function up() {
        Schema::create('product_warehouses', function (Blueprint $table) {
            $table->id();
            $table->integer('lot');
            $table->integer('detail');
            $table->integer('cost');
            $table->integer('amount');
            $table->integer('sale');
            $table->foreignId('product_idProduct')->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('product_warehouses');
    }
}
