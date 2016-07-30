<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id')->comment("库存的编号");
            $table->integer('good_id')->comment("商品的id");
            $table->string("detail")->comment("商品的规格详情");
            $table->decimal("price")->comment("具体商品的具体价格");
            $table->integer("count")->comment("具体商品的库存");
            $table->timestamps();
        });
=======
        // Schema::create('stores', function (Blueprint $table) {
        //     $table->increments('id')->comment("库存的编号");
        //     $table->integer('good_id')->comment("商品的id");
        //     $table->string("detail")->comment("商品的规格详情");
        //     $table->decimal("price")->comment("具体商品的具体价格");
        //     $table->integer("count")->comment("具体商品的库存");
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
        Schema::drop('stores');
=======
        // Schema::drop('stores');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
