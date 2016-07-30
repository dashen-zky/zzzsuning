<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('attr_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("属性值的名称");
            $table->integer("attr_id")->comment("属性值所属属性的id");
            $table->tinyInteger("status")->comment("属性值的状态");
            $table->timestamps();
        });
=======
        // Schema::create('attr_values', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("属性值的名称");
        //     $table->integer("attr_id")->comment("属性值所属属性的id");
        //     $table->tinyInteger("status")->comment("属性值的状态");
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
        Schema::drop('attr_values');
=======
        // Schema::drop('attr_values');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
