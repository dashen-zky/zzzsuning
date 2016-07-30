<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('num')->comment('订单编号');
        //     $table->string('user_id')->comment('用户id');
        //     $table->decimal('total')->comment('总价');
        //     $table->string('address_id')->comment('收货地址id');
        //     $table->string('status')->comment('订单状态');
        //     $table->string('paytype')->comment('支付方式');
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
        // Schema::drop('orders');
    }
}
