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
        Schema::create('publishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->default(1);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('title');
            $table->string('user_name');
            $table->string('slug');
            $table->string('location');
            $table->string('size');
            $table->unsignedInteger('price');
            $table->string('type');
            $table->string('deed');
            $table->string('deed_img')->nullable();
            $table->string('land_img')->nullable();
            $table->string('contact')->default('admin@rels.co.ke');
            $table->text('description');
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
        Schema::dropIfExists('publishes');
    }
};
