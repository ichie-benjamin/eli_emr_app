<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiseaseReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_reports', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name_of_disease')->nullable();
            $table->string('date')->nullable();
            $table->string('country')->nullable();
            $table->integer('patients_id')->unsigned()->nullable()->index();
            $table->string('patient_first_name')->nullable();
            $table->string('patient_last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('ethic_origin')->nullable();
            $table->string('area_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('time')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('was_hospitalized')->nullable();
            $table->string('did_patients_die')->nullable();
            $table->boolean('is_patient_pregnant')->nullable();
            $table->string('patient_associated_with')->nullable();
            $table->string('exposure_occurance_district')->nullable();
            $table->string('country_of_exposure')->nullable();
            $table->string('show_symbol')->nullable();
            $table->date('sympton_date')->nullable();
            $table->boolean('is_sexually_transmitted')->nullable();
            $table->string('name_of_facility')->nullable();
            $table->text('findings_summary')->nullable();
            $table->string('first_name_of_principal_investigator')->nullable();
            $table->string('last_name_of_principal_investigator')->nullable();
            $table->string('area_code_of_investigator')->nullable();
            $table->string('phone_of_investigator')->nullable();
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
        Schema::drop('disease_reports');
    }
}
