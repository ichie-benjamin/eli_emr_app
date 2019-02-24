<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHivPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiv_patients', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('patient_name');
            $table->string('facility_client_name')->nullable();
            $table->string('unique_code')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('sex');
            $table->string('address')->nullable();
            $table->string('family_members')->nullable();
            $table->string('contact')->nullable();
            $table->date('date_confirmed_hiv');
            $table->string('hiv_type');
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
        Schema::drop('hiv_patients');
    }
}
