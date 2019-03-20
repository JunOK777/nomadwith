<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index();

            $table->string('address')->nullable();
            $table->string('job')->nullable();
            $table->string('salary')->nullable();

            $table->string('nomad_flag')->nullable();
            $table->string('smoke_flag')->nullable();
            $table->string('alcohol_flag')->nullable();

            $table->longText('introduce')->nullable();
            $table->string('image_path')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('profile');
    }
}
