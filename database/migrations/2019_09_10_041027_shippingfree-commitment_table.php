<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShippingfreeCommitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Chính sách giao hàng
        Schema::create('shipping',function (Blueprint $table)
        {
            $table->bigIncrements('id');
           
            $table->text('content');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        //cam kết
        Schema::create('commitment',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            
            $table->text('content');
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
