<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CityID')->nullable();
            $table->string('InvLocation')->nullable();
            $table->string('VisitStatus')->nullable();
            $table->string('VisitReason')->nullable();
            $table->datetime('VisitDate')->nullable();
            $table->string('VisitTS')->nullable();
            $table->string('Description')->nullable();
            $table->string('BookedDate')->nullable();
            $table->string('Agent')->nullable();
            $table->string('DoneDate')->nullable();
            $table->bigInteger('visitID')->nullable();
            $table->string('AssignAgent')->nullable(); 
            $table->unsignedBigInteger('enquiry_id')->nullable(); 
            $table->foreign('enquiry_id')->references('id')->on('enquiries');
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
        Schema::dropIfExists('visits');
    }
}
