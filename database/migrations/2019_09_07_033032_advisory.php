<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Advisory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Câu hỏi thường gặp
        Schema::create('questions',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('summary');
            $table->text('content');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
           


        });
        //Hỏi đáp và tư vấn
        Schema::create('advisory',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->text('question');
            $table->tinyInteger('status')->default(1);
            $table->text('answer')->nullable();
            $table->timestamps();
        });


        Schema::create('answer',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->text('answer');
            $table->bigInteger('advisory_id')->unsigned();
            $table->foreign('advisory_id')
                    ->references('id')
                    ->on('advisory')
                    ->onDelete('cascade');
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
