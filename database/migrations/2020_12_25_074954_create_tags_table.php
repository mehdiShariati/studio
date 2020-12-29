<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title")->unique();
            $table->string("slug")->unique();
            $table->string("meta_title")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->longText("body")->nullable();
            $table->boolean("has_pic")->default(false);
            $table->longText("specific_body")->nullable();
            $table->string("tag_pipe")->nullable();
            $table->string("image")->nullable();
            $table->string("alt_image")->nullable();
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
        Schema::dropIfExists('tags');
    }
}
