<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('contact');
            $table->string('email');
            $table->string('school');
            $table->string('city');
            $table->string('dob');
            $table->string('gender');
            $table->string('roll_no');
            $table->string('roll_code');
            $table->string('math');
            $table->string('science');
            $table->string('sst');
            $table->string('hindi');
            $table->string('english');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
