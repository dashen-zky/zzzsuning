<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("规格名称");
            $table->integer("type_id")->comment("外键 类型id");
            $table->tinyInteger("status")->comment("规格的状态")->default(1);
            $table->timestamps();
        });
=======
        // Schema::create('specs', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("规格名称");
        //     $table->integer("type_id")->comment("外键 类型id");
        //     $table->tinyInteger("status")->comment("规格的状态")->default(1);
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
        Schema::drop('specs');
=======
        // Schema::drop('specs');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
