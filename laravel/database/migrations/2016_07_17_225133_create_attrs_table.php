<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('attrs', function (Blueprint $table) {
            $table->increments("id")->comment("主键自增id");
            $table->integer("type_id")->comment("外键 类型的id");
            $table->string("name")->comment("属性的名称");
            $table->tinyInteger("status")->comment("属性的状态");
            $table->timestamps();

       });
=======
       //  Schema::create('attrs', function (Blueprint $table) {
       //      $table->increments("id")->comment("主键自增id");
       //      $table->integer("type_id")->comment("外键 类型的id");
       //      $table->string("name")->comment("属性的名称");
       //      $table->tinyInteger("status")->comment("属性的状态");
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
        Schema::drop("attrs");
=======
        // Schema::drop("attrs");
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
