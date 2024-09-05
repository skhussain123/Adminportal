<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_clientorders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('academic_level')->nullable();
            $table->string('typeofService')->nullable();

            $table->string('pages')->nullable();
            $table->string('words')->nullable();

            $table->string('paper_type')->nullable();
            $table->string('deadline')->nullable();
            $table->string('Spacing')->nullable();
            $table->string('CountryCode')->nullable();
            $table->date('Date')->nullable();
            $table->time('ordertime')->nullable();
            $table->string('order_status')->default(0);
            $table->decimal('total_amount')->default(0);
            $table->boolean('viewed')->default(0);


            //second step Colums here

            $table->string('subject_area')->nullable();
            $table->string('topic')->nullable();
            $table->string('PaperInstructions')->nullable();

            $table->string('PaperInstructionsFiles')->nullable();
            $table->string('PaperFormat')->nullable();
            $table->string('Sources')->nullable();
            $table->string('Powerpoint')->nullable();
            $table->string('ChartsGraph')->nullable();
            $table->string('helpfulextras')->nullable();





            $table->foreign('user_id')->references('id')->on('wp_clientauth')->onDelete('cascade');

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
        Schema::dropIfExists('wp_clientorders');
    }
};
