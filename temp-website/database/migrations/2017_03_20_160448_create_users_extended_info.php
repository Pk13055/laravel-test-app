<?php

// You create a migration with php artisan create:migration <name of migration> --create=<name of table>
// This template is rendered using the --create option 


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersExtendedInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_more', function (Blueprint $table) { // this schema creates the table whose attributes can be added as follows: 
            $table->increments('id');
            $table->string('marital');
            $table->integer('user_id');
            $table->integer('mobile');
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
        Schema::dropIfExists('user_more');
    }
}
