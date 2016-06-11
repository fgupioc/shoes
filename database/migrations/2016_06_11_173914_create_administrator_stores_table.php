<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('administrator_id')->unsigned();
            $table->foreign('administrator_id')
                ->references('id')->on('administrators')
                ->onDelete('cascade');
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')
                ->references('id')->on('stores')
                ->onDelete('cascade');
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
        Schema::drop('administrator_stores');
    }
}
