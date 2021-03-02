<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->mediumText('title');
            $table->string('img_post')->nullable();
            $table->mediumText('text');
            $table->string('slug',50);
            $table->string('subtitle',150)->nullable();
            $table->date('pubblication_date');
            $table->timestamps();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onCascade('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
