<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_trackings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipid');
            $table->date('shipdate');
            $table->string('carrier')->nullable();
            $table->tinyInteger('box_nos')->nullable();
            $table->float('packweight', 8, 2);
            $table->float('packvalue', 8, 2);
            $table->string('trackid')->nullable();
            $table->text('track_url')->nullable();
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
        Schema::dropIfExists('ship_trackings');
    }
}
