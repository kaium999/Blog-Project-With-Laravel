<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment_name');
            /*$table->unsignedBiginteger('post_id');
            $table->foreign('post_id')
            ->references('id')->on('post')
             ->onDelete('cascade');
             $table->unsignedBiginteger('user_id');
            $table->foreign('userid_id')
            ->references('id')->on('user')
             ->onDelete('cascade');*/
           
            $table->integer('post_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('comments');
    }
};
