<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('patient_id')->unsigned()->nullable()->index();
            $table->string('patient_name')->nullable();
            $table->text('medical_case')->nullable();
            $table->text('previous_case')->nullable();
            $table->text('current_case')->nullable();
            $table->string('patient_address')->nullable();
            $table->string('assigned_doctor')->nullable();
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
        Schema::drop('patient_histories');
    }
}
