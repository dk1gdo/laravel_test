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
        Schema::create('mixes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->unsignedBigInteger('post_id_a');
            $table->foreign('post_id_a')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_b');
            $table->foreign('post_id_b')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_c');
            $table->foreign('post_id_c')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_d');
            $table->foreign('post_id_d')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_e');
            $table->foreign('post_id_e')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_f');
            $table->foreign('post_id_f')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_g');
            $table->foreign('post_id_g')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_h');
            $table->foreign('post_id_h')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_i');
            $table->foreign('post_id_i')->references('id')->on('posts');
            $table->unsignedBigInteger('post_id_j');
            $table->foreign('post_id_j')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mixes');
    }
};
