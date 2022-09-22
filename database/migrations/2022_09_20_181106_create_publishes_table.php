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
            $table->string('post_id')->default(1);
            $table->string('user_name')->default('Real Estate Listing System');
            $table->string('title');
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
