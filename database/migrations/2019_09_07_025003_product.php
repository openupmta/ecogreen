<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table)
        {
           $table->bigIncrements('id');
           $table->string('image');
        });

        Schema::create('products',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            //Noi dung trong gio hang cua san pham
            $table->text('content');
            //Chi tiet duoi san pham
            $table->text('detail');
            //Cam ket
            $table->text('commitment')->nullable();
            $table->integer('quantity');
            $table->bigInteger('price');
            $table->string('avartar');
            $table->integer('favorite');
            $table->bigInteger('image_id')->unsigned();
            $table->foreign('image_id')
                ->references('id')
                ->on('image')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('ratings',function (Blueprint $table)
        {
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->text('content');
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
