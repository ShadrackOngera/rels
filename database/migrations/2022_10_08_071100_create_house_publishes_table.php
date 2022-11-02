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
        Schema::create('house_publishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_id')->default(1);
            $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('cascade');
            $table->string('user_name')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('location')->nullable();
            $table->string('house_type')->nullable();
            $table->integer('price')->nullable();
            $table->string('time')->nullable();
            $table->string('relationship')->nullable();
            $table->string('house_image')->nullable();
            $table->text('description')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('house_publishes');
    }
};
