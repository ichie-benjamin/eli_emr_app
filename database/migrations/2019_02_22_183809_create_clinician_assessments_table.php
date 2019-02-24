<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicianAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinician_assessments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('hiv_patient_id')->unsigned()->index();
            $table->foreign('hiv_patient_id')->references('id')->on('hiv_patients')->onDelete('cascade');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('body_mass_index');
            $table->date('date');
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
        Schema::drop('clinician_assessments');
    }
}
