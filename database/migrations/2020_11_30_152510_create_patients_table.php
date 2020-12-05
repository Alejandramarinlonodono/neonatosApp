<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->integer("civilregistration");
            $table->unsignedBigInteger("institutionB_id");
            $table->unsignedBigInteger("institutionH_id");
            $table->unsignedBigInteger("mother_id");
            $table->unsignedBigInteger("state_id");
            $table->string("laborcompletion");
            $table->string("toolsbirth");
            $table->unsignedBigInteger("genre_id");
            $table->unsignedBigInteger("keeper_id");
            $table->integer("score");
            $table->string("diagnostics");
            $table->string("assessment");
            $table->integer("oxigendays");
            $table->integer("treatmentdays");
            $table->string("supplies");
            $table->timestamps();

            $table->foreign('institutionB_id')
                  ->references('id')->on('institutions');
            $table->foreign('institutionH_id')
                  ->references('id')->on('institutions');
            $table->foreign('mother_id')
                  ->references('id')->on('mothers');
            $table->foreign('keeper_id')
                  ->references('id')->on('keepers');
            $table->foreign('genre_id')
                  ->references('id')->on('genres');
            $table->foreign('state_id')
                  ->references('id')->on('states');                 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
