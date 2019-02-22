<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientCallLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_call_logs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('staff_id')->unsigned()->index();
            $table->integer('patient_id')->unsigned()->index();
            $table->string('time');
            $table->string('description', 1000)->nullable();
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
        Schema::drop('patient_call_logs');
    }
}
