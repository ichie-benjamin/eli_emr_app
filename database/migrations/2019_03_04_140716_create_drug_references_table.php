<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_references', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('unit')->nullable();
            $table->integer('quantity');
            $table->integer('wholesale_price');
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
        Schema::drop('drug_references');
    }
}
