<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('image');
            $table->text('title');
            $table->text('content');
            $table->string('link');
            $table->string('hotline');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        
        Schema::create('expert',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('image');
            $table->timestamps();
        });


        Schema::create('catepromotion',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('email');
            $table->tinyInteger('status')->default(1);
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
        //
    }
}
