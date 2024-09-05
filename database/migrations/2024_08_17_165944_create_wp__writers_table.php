<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_allwriters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email', 255)->unique();
            $table->string('password');
            $table->decimal('rating')->default(0.00); // DECIMAL(3, 2) DEFAULT 0.00
            $table->string('status')->default('1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wp_allwriters');
    }
};
