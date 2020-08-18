<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FileForPlans extends Migration
{
   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Table('plans',function($table){
            $table->string('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::Table('plans',function($table){
            $table->dropColumn('file');
        });
    
    }
}
