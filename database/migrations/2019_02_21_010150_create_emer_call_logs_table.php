<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmerCallLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emer_call_logs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('caller_name');
            $table->integer('user_id')->unsigned()->index();
            $table->string('caller_phone')->nullable();
            $table->string('time')->nullable();
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
        Schema::drop('emer_call_logs');
    }
}
