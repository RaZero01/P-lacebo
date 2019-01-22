<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionItemImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_item_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('collection_item_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('collection_item_id')->references('id')->on('collection_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_item_images');
    }
}
