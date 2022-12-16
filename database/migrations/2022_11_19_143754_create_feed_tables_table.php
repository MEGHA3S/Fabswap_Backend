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
        Schema::create('feed_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('username');
            $table->String('image');
            $table->String('dress_name');
            $table->String('dress_size');
            $table->String('dress_price');
            $table->String('likes');
            $table->String('comments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feed_tables');
    }
};
