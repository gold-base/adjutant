<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademyUsersTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_users_tasks', function (Blueprint $table) {
          $table->uuid('id');
          $table->uuid('academy_user_id');
          $table->string('prompt');
          $table->timestamps();

          $table->primary('id');
        });
        // foreign key must be created as a separate
        Schema::table('academy_users_tasks', function($table) {
          $table->foreign('academy_user_id')->references('id')->on('academy_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academy_users_tasks');
    }
}
