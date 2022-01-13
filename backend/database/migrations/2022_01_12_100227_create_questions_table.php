<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('set_id');
            $table->string('title', 255)->nullable();
            $table->string('correct', 255);
            $table->string('uncorrect1', 255);
            $table->string('uncorrect2', 255)->nullable();
            $table->string('uncorrect3', 255)->nullable();
            $table->string('uncorrect4', 255)->nullable();
            $table->string('uncorrect5', 255)->nullable();
            $table->string('image_name', 255)->nullable();
            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('set_id')->references('id')->on('sets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
