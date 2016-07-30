<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('addresses', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->comment('姓名');
        //     $table->string('phone')->comment('手机号');
        //     $table->string('sheng')->comment('省id');
        //     $table->string('shi')->comment('市id');
        //     $table->string('xian')->comment('县id');
        //     $table->string('youbian')->comment('邮政编码');
        //     $table->string('user_id')->comment('用户id');
        //     $table->string('detail')->comment('详细地址');
        //     $table->string('isdefault')->comment('是否默认 1位默认 0为不默认');
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
        // Schema::drop('addresses');
    }
}
