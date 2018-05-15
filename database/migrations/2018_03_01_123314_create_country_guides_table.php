<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_guides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->string('banner_img')->nullable();
            $table->longText('dutytax')->nullable();
            $table->text('dutytax_meta')->nullable();
            $table->longText('transits')->nullable();
            $table->text('transits_meta')->nullable();
            $table->longText('forbidden')->nullable();
            $table->text('forbidden_meta')->nullable();
            $table->string('video_url')->nullable();
            $table->text('video_head')->nullable();
            $table->text('video_desc')->nullable();
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
        Schema::dropIfExists('country_guides');
    }
}
