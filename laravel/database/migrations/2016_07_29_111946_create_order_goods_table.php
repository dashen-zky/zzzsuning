<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('order_goods', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('order_id')->comment('订单id');
        //     $table->integer('goods_id')->comment('商品id');
        //     $table->integer('num')->comment('数量');
        //     $table->string('detail')->comment('下单的商品详情');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('order_goods');
    }
}
