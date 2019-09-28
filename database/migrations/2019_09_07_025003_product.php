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
//        Thể loại của sản phẩm
        Schema::create('cate_products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            //Hiển thị cate product
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        //Sản phẩm
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            //Noi dung trong gio hang cua san pham
            $table->text('content');
            //Chi tiet duoi san pham
            $table->text('detail');

            //Số lượng
            $table->integer('quantity');
            $table->bigInteger('price');
            $table->integer('favorite');
            $table->bigInteger('cate_product_id')->unsigned();
            $table->foreign('cate_product_id')
                ->references('id')
                ->on('cate_products')
                ->onDelete('cascade');
            $table->string('image');    
            $table->tinyInteger('status')->default(1);

            $table->timestamps();
        });
    

        Schema::create('ratings', function (Blueprint $table) {
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
