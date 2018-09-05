<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
            Schema::create('users' , function (Blueprint $table)
            {
                  $table->increments('id');
                  $table->string('name');
                  $table->string('email')->unique();
                  $table->string('avatar_path')->nullable();
                  $table->string('password');
                  $table->rememberToken();
                  $table->timestamps();
            });

            Schema::create('group_user' , function (Blueprint $table)
            {
                  $table->integer('group_id');
                  $table->integer('user_id');
            });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
            Schema::dropIfExists('users');
            Schema::dropIfExists('group_user');

      }
}
