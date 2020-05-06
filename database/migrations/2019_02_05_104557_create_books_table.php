<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->Text('abstract');
            $table->string('isbn')->nullable();
            $table->integer('page_no');
            $table->string('category');
            $table->string('sub_category');
            $table->string('tagline');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('price');
            $table->Text('author');
            $table->unsignedInteger('publication_id');
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->string('image');
            $table->string('book_file');
            $table->string('edition');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->Text('tags');
            $table->unsignedInteger('views')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('books');
       
     
     Schema::enableForeignKeyConstraints();
    }
}
