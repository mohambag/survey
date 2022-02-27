<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('question')->nullable();
            $table->string('type')->nullable()->default('radio'); //checkBox
            $table->string('ans0')->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans5')->nullable();
            $table->string('ans6')->nullable();
            $table->string('ans7')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('colorText')->nullable();
            $table->string('colorBackground')->nullable();
            $table->string('colorBorder')->nullable();
            $table->string('colorTitle')->nullable();
            $table->string('colorBackgroundTitle')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
