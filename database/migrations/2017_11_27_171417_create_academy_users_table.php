<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_users', function (Blueprint $table) {
          $table->uuid('id');
          $table->uuid('user_id');
          $table->string('rank');
          $table->timestamps();

          $table->primary('id');
        });
        // foreign key must be created as a separate
        Schema::table('academy_users', function($table) {
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academy_users');
    }
}
