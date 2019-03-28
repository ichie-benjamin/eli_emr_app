<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('m_r_n')->nullable();
            $table->string('patient_name')->nullable();
            $table->integer('patient_id')->unsigned()->nullable()->index();
            $table->string('appointment_time')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('time_check_in')->nullable();
            $table->string('time_check_out')->nullable();
            $table->boolean('no_show')->default(false);
            $table->string('patient_address')->nullable();
            $table->string('contact_number')->nullable();
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
        Schema::drop('appointments');
    }
}
