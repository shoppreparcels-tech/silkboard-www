<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packid');
            $table->float('storage', 8, 2)->nullable()->default(0);
            $table->float('address', 8, 2)->nullable()->default(0);
            $table->float('handling', 8, 2)->nullable()->default(0);
            $table->float('pickup', 8, 2)->nullable()->default(0);
            $table->float('doc', 8, 2)->nullable()->default(0);
            $table->float('basic_photo', 8, 2)->nullable()->default(0);
            $table->float('advnc_photo', 8, 2)->nullable()->default(0);
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
        Schema::dropIfExists('package_charges');
    }
}
