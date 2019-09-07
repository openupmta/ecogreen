<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('roles',function (Blueprint $table)
         {
            $table->bigIncrements('id');
            $table->string('name');
         });
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->bigInteger('level')->unsigned();
            $table
                ->foreign('level')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
            $table->integer('status')->default(1);
            $table->timestamps();

        });
        Schema::create('users',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('password');
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
