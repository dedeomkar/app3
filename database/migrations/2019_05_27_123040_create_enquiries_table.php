<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
                   
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('EnquiryName'); 
            $table->datetime('CallBackDate')->nullable();
            $table->bigInteger('MobileNo')->nullable();
            $table->string('City')->nullable();
            $table->string('Source')->nullable(); 
            $table->string('Email')->nullable();
            $table->string('Status')->nullable();
            $table->string('Unsub')->nullable();
            $table->string('Invalid')->nullable();
            $table->string('BuyerNo')->nullable();
            $table->integer('PinCode')->nullable();
            $table->string('Location')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Subsource')->nullable();
            $table->string('Income')->nullable();
            $table->integer('AltPhone')->nullable();
            $table->string('Profession')->nullable();
            $table->integer('AltPhone2')->nullable();
            $table->string('MartialStatus')->nullable();
            $table->string('LeadOwner')->nullable();
            $table->string('Age')->nullable();
            $table->string('ExOffer')->nullable();
            $table->string('Lang')->nullable();
            $table->string('Recom1')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Recom2')->nullable();
            $table->string('Recom3')->nullable();
            $table->string('LastCall')->nullable();
            $table->string('LeadTP')->nullable();
            $table->string('DID')->nullable();
            $table->string('VID')->nullable();
            $table->string('AgentTP')->nullable();
            $table->string('History')->nullable();
            $table->string('Description')->nullable();
            $table->string('AltCity')->nullable();
            $table->string('ReasonNSub')->nullable();
            $table->string('ReasonNinv')->nullable();
            $table->string('IsSub')->nullable();
            $table->string('IsInv')->nullable();
            $table->string('Npotential')->nullable();
            $table->string('Potential')->nullable();
            $table->string('YearOfManf')->nullable();
            $table->string('Budget')->nullable();
            $table->string('Manf')->nullable();
            $table->string('Model')->nullable();
            $table->string('Plocation')->nullable();
            $table->string('Paper')->nullable();
            $table->string('Loan')->nullable();
            $table->string('Npaper')->nullable();
            $table->string('Nloan')->nullable();
            $table->string('isInsur')->nullable();
            $table->string('Swarn')->nullable();
            $table->string('ReasonNinsur')->nullable();
            $table->string('ReasonNswarn')->nullable();
            $table->string('CarModel')->nullable();
            $table->string('CarPrice')->nullable();
            $table->string('BodyType')->nullable();
            $table->string('BodyColor')->nullable();
            $table->string('Fuel')->nullable();
            $table->string('Maxown')->nullable();
            $table->string('Transmission')->nullable(); 
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
        Schema::dropIfExists('enquiries');
    }
}
