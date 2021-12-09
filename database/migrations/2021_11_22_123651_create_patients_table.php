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
            $table->string('name');                     
            $table->date('tanggalLahir');               
            $table->string('alamat');                       
            $table->string('pekerjaan');                       
            $table->string('nik');                    
            $table->string('fotoktp')->default(null);            
            $table->string('nobpjs');  
            $table->string('fotobpjs');       
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
        Schema::dropIfExists('patients');
    }
}
