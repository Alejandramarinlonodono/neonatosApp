<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->integer("age");
            $table->unsignedBigInteger("scholarship_id");
            $table->unsignedBigInteger("civilstate_id");
            $table->unsignedBigInteger("anesthesiatype_id");
            $table->integer("steroids");
            $table->string("finalizarionlabor");
            $table->timestamps();

            $table->foreign('scholarship_id')
                  ->references('id')->on('scholarships');
            $table->foreign('civilstate_id')
                  ->references('id')->on('civilstates');
            $table->foreign('anesthesiatype_id')
                  ->references('id')->on('anesthesiatypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mothers');
    }
}
