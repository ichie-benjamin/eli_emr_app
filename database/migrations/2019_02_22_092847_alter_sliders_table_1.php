<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterSlidersTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sliders', function(Blueprint $table)
        {
            $table->string('sub_title')->nullable();
            $table->string('first_link')->nullable();
            $table->string('second_link')->nullable();
            $table->string('position')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sliders', function(Blueprint $table)
        {
            $table->dropColumn('sub_title');
            $table->dropColumn('first_link');
            $table->dropColumn('second_link');
            $table->dropColumn('position');

        });
    }
}
