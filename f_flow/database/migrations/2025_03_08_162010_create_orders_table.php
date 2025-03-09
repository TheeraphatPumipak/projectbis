<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_idCustomers')->constrained('customers')->onDelete('cascade');
            $table->integer('amount');
            $table->integer('status');
            $table->integer('price');
            $table->integer('total');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('orders');
    }
}
