<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custid');
            $table->enum('std_photo', [1, 0])->nullable()->default(0);
            $table->enum('advc_photo', [1, 0])->nullable()->default(0);
            $table->enum('repack', [1, 0])->nullable()->default(0);
            $table->enum('sticker', [1, 0])->nullable()->default(0);
            $table->enum('pack_extra', [1, 0])->nullable()->default(0);
            $table->enum('orginal_box', [1, 0])->nullable()->default(0);

            $table->float('maxweight', 8, 2)->nullable();
            $table->enum('giftwrap', [1, 0])->nullable()->default(0);
            $table->enum('giftnote', [1, 0])->nullable()->default(0);

            $table->string('tax_id')->nullable();
            $table->enum('personal', [1, 0])->nullable()->default(0);
            $table->enum('include_invoice', [1, 0])->nullable()->default(0);
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
        Schema::dropIfExists('shipping_preferences');
    }
}
