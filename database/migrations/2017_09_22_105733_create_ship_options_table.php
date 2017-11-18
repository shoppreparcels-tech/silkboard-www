<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipid');
            $table->enum('repack', [1,0])->default(0)->nullable();
            $table->float('repack_amt', 8, 2)->nullable();
            $table->enum('sticker', [1,0])->default(0)->nullable();
            $table->float('sticker_amt', 8, 2)->nullable();
            $table->enum('extrapack', [1,0])->default(0)->nullable();
            $table->float('extrapack_amt', 8, 2)->nullable();
            $table->enum('original', [1,0])->default(0)->nullable();
            $table->float('original_amt', 8, 2)->nullable();
            $table->enum('consolid', [1,0])->default(0)->nullable();
            $table->float('consolid_amt', 8, 2)->nullable();
            $table->enum('giftwrap', [1,0])->default(0)->nullable();
            $table->float('giftwrap_amt', 8, 2)->nullable();
            $table->enum('giftnote', [1,0])->default(0)->nullable();
            $table->float('giftnote_amt', 8, 2)->nullable();
            $table->text('giftnote_txt')->nullable();
            $table->enum('insurance', [0, 1])->default(0)->nullable();
            $table->float('insurance_amt', 8, 2)->nullable();
            $table->enum('liquid', [0, 1])->default(0)->nullable();
            $table->float('liquid_amt', 8, 2)->default(0)->nullable();
            $table->string('profoma_taxid')->nullable();
            $table->enum('profoma_personal', [1,0])->default(0)->nullable();
            $table->enum('invoice_include', [1,0])->default(0)->nullable();
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
        Schema::dropIfExists('ship_options');
    }
}
