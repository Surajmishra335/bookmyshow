<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->foreignId('language_id');
            $table->foreignId('genre_id');
            $table->foreignId('format_id');
            $table->date('release_date');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('duration');
            $table->string('trailer_link')->nullable();
            $table->string('banner_image');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->string('location');
            $table->decimal('price');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('movies');
    }
}
