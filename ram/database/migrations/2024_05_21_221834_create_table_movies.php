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
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->date('released_date')->nullable();
            $table->tinyInteger('genre_id')->unsigned()->index();
            $table->integer('image_id')->nullable()->unsigned()->nullable()->index();
            $table->boolean('is_visible')->default(true);
            $table->timestamps();

            // $table->foreign('genre_id')
            //     ->references('id')
            //     ->on('genres')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade')
            // ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
