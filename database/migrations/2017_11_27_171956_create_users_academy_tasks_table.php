<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademyUsersAcademyTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_academy_tasks', function (Blueprint $table) {
          $table->uuid('id');
          $table->uuid('user_id');
          $table->uuid('academy_task_id');
          $table->timestamps();

          $table->primary('id');
        });
        // foreign key must be created as a separate
        Schema::table('users_academy_tasks', function($table) {
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('academy_task_id')->references('id')->on('academy_tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_academy_tasks');
    }
}
