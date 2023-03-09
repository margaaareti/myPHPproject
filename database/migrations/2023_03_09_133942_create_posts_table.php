<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

           $table->foreignId('user_id')->constrained('users');//->cascadeOnDelete();

            $table->string('title');
            $table->text('content');

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();

        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
