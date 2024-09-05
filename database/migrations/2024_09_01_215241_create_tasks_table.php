<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('writer_id');
            $table->unsignedBigInteger('user_id');

            $table->enum('status', ['assigned', 'in_progress', 'completed']);
            $table->string('startDate');
            $table->string('EndDate');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('wp_clientauth')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('wp_clientorders')->onDelete('cascade');
            $table->foreign('writer_id')->references('id')->on('wp_allwriters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
