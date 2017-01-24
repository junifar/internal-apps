<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gid')->unique();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('identity_number')->nullable();
            $table->string('license_id',30)->nullable();
            $table->string('phone')->nullable();
            $table->string('handphone')->nullable();
            $table->string('email')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
