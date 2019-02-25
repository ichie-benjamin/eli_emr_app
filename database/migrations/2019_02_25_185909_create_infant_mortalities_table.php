<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfantMortalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infant_mortalities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('year_of_death');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sex');
            $table->string('age');
            $table->integer('facility_id')->unsigned()->index();
            $table->integer('ethnicity_id')->unsigned()->index();
            $table->string('causes_of_death');
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
        Schema::drop('infant_mortalities');
    }
}
