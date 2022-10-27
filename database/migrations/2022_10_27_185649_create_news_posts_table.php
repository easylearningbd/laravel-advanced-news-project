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
        Schema::create('news_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('user_id');
            $table->string('news_title');
            $table->string('news_title_slug');
            $table->string('image');
            $table->text('news_details');
            $table->text('tags');
            $table->integer('breaking_news')->nullable();
            $table->integer('top_slider')->nullable();
            $table->integer('first_section_three')->nullable();
            $table->integer('first_section_nine')->nullable();
            $table->string('post_date')->nullable();
            $table->string('post_month')->nullable();
            $table->integer('status')->default(1); 
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
        Schema::dropIfExists('news_posts');
    }
};
