<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaternalMortalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maternal_mortalities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->dateTime('date_time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sex');
            $table->date('date_of_birth')->nullable();
            $table->integer('facility_id')->unsigned()->index();
            $table->integer('ethnicity_id')->unsigned()->index();
            $table->string('causes_of_death')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maternal_mortalities');
    }
}
