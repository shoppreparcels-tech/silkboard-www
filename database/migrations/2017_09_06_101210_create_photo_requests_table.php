<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packid');
            $table->enum('type', ['standard', 'advanced']);
            $table->enum('status', ['pending', 'completed']);
            $table->text('description')->nullable();
            $table->float('charge', 8, 2);
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
        Schema::dropIfExists('photo_requests');
    }
}
