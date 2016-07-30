<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('params', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("参数名称");
            $table->integer("spec_id")->comment("外键 规格id");
            $table->tinyInteger("status")->comment("参数的状态")->default(1);
            $table->timestamps();
        });
=======
        // Schema::create('params', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("参数名称");
        //     $table->integer("spec_id")->comment("外键 规格id");
        //     $table->tinyInteger("status")->comment("参数的状态")->default(1);
        //     $table->timestamps();
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
        Schema::drop('params');
=======
        // Schema::drop('params');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
