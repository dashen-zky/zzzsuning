<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        
        Schema::create('types', function (Blueprint $table) {
            $table->increments("id")->comment("主键自增id");
            $table->string("name")->comment("类型的名称");
            $table->tinyInteger("status")->comment("类型状态");
            $table->timestamps();

       });
=======
        //
       //  Schema::create('types', function (Blueprint $table) {
       //      $table->increments("id")->comment("主键自增id");
       //      $table->string("name")->comment("类型的名称");
       //      $table->tinyInteger("status")->comment("类型状态");
       //      $table->timestamps();

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
        Schema::drop("types");
=======
        // Schema::drop("types");
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
