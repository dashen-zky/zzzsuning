<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
        });
=======
        // Schema::create('sessions', function (Blueprint $table) {
        //     $table->string('id')->unique();
        //     $table->text('payload');
        //     $table->integer('last_activity');
        // });
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::drop('sessions');
=======
        // Schema::drop('sessions');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
