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
            $table->string('user_name');
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->string('house_type');
            $table->integer('price');
            $table->string('time');
            $table->string('relationship');
            $table->string('house_image');
            $table->text('description');
            $table->string('contact');
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
