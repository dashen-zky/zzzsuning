<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('pics', function (Blueprint $table) {
            $table->increments('id');
            $table->string("pic")->comment("商品的展示图");
            $table->integer("store_id")->comment("库存商品的id");
            $table->timestamps();
        });
=======
        // Schema::create('pics', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("pic")->comment("商品的展示图");
        //     $table->integer("store_id")->comment("库存商品的id");
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
        Schema::drop('pics');
=======
        // Schema::drop('pics');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
