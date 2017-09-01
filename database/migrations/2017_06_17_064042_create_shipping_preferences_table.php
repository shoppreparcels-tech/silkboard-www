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
            $table->integer('customer_id');
            $table->string('email_alt')->nullable();
            $table->enum('photo_login', [1, 0])->nullable()->default(0);
            $table->enum('schedule',['auto', 'hold'])->nullable()->default('hold');
            $table->enum('repack', [1, 0])->nullable()->default(0);
            $table->enum('sticker', [1, 0])->nullable()->default(0);
            $table->enum('pack_extra', [1, 0])->nullable()->default(0);
            $table->enum('orginal_box', [1, 0])->nullable()->default(0);
            $table->float('box_weight', 8, 2)->nullable();
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
