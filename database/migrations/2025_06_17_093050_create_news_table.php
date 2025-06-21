<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();                     
            $table->integer('newscategory_id')->unsigned();             
            $table->string('title');             
            $table->string('type');             
            $table->text('slug')->nullable();         
            $table->text('newslink')->nullable();                  
            $table->longText('text')->nullable();      
            $table->string('image')->nullable();           
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
        Schema::dropIfExists('news');
    }
}
