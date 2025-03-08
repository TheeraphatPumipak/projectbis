<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id('idProduct');
            $table->string('productName', 45);
            $table->foreignId('product_category_idCategory')->constrained('product_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('products');
    }
}
