<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Health extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Thể loại sức khỏe
        Schema::create('cate_health', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
//
        Schema::create('health', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('summary');
            $table->text('content');
            $table->bigInteger('cate_id')->unsigned();
            $table->foreign('cate_id')
                ->references('id')
                ->on('cate_health')
                ->onDelete('cascade');
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
