<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration {
    public function up() {
        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('platformName', 45);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('platforms');
    }
}