<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreCatClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_cat_clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('store_id');
            $table->text('url');
            $table->smallInteger('rank');
            $table->enum('featured', [0, 1])->default(0)->nullable();
            $table->text('info')->nullable();
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
        Schema::dropIfExists('store_cat_clubs');
    }
}
