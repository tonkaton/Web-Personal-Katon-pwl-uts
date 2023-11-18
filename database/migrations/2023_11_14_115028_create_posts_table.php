<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
          $table->id();
          $table->string('title')->nullable();
          $table->text('description')->nullable();
          $table->string('image')->nullable();
          $table->timestamps();
        });
      }
}
