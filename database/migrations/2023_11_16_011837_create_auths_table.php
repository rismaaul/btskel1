<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('auth', function (Blueprint $table) {
            $table->string('username', 50)->nullable(false)->primary();
            $table->text('password')->nullable(false);
            $table->enum('role', ['admin', 'pengunjung']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth');
    }
};