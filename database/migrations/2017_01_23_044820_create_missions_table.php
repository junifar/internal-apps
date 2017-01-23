<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('advertiser_id');
            $table->string('name')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('length')->nullable();
            $table->integer('iterate')->nullable();
            $table->decimal('Reward', 10, 2);
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
        Schema::dropIfExists('missions');
    }
}
