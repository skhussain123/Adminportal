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
        Schema::create('wp_catchleads', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255); // VARCHAR(255) NOT NULL
            $table->string('paper_type', 100)->nullable(); // VARCHAR(100)
            $table->string('study_level', 100)->nullable(); // VARCHAR(100)
            $table->integer('pages')->nullable(); // INT
            $table->string('Access')->default('1');
            $table->decimal('price', 10, 2)->nullable();
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
        Schema::dropIfExists('wp_catchleads');
    }
};
