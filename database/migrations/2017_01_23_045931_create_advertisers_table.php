<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gid')->unique();
            $table->string('name')->nullable();
            $table->string('identity_number')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('handphone')->nullable();
            $table->string('email')->nullable();
            $table->integer('company_id');
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
        Schema::dropIfExists('advertisers');
    }
}
