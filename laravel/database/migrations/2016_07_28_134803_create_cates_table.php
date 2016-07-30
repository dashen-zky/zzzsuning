<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('cates', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("分类的名称");
            $table->integer("pid")->comment("分类的父类");
            $table->string("path")->comment("分类的路径");
            $table->tinyInteger("status")->comment("分类的状态");
            $table->integer("count")->comment("分类子类的数量");
            $table->timestamps();
        });
=======
        // Schema::create('cates', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string("name")->comment("分类的名称");
            // $table->integer("pid")->comment("分类的父类");
            // $table->string("path")->comment("分类的路径");
            // $table->tinyInteger("status")->comment("分类的状态");
            // $table->integer("count")->comment("分类子类的数量");
            // $table->timestamps();
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
        Schema::drop('cates');
=======
        // Schema::drop('cates');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
