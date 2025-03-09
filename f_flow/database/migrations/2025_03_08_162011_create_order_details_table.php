<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration {
    public function up() {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('idOrder_Detail');
            $table->integer('amount');
            $table->string('order_detail', 45);
            $table->foreignId('product_warehouse_idSku')->constrained('product_warehouses')->onDelete('cascade');
            $table->foreignId('order_idOrder')->constrained('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('order_details');
    }
}
