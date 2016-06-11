<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator_institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('administrator_id')->unsigned();
            $table->foreign('administrator_id')
                ->references('id')->on('administrators')
                ->onDelete('cascade');
            $table->integer('institution_id')->unsigned();
            $table->foreign('institution_id')
                ->references('id')->on('institutions')
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
        Schema::drop('administrator_institutions');
    }
}
