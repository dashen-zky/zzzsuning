<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('details', function (Blueprint $table) {
        //     $table->increments('id')->comment('自增主键id');
        //     $table->integer('user_id')->comment('关联用户id');
        //     $table->string('profile')->comment('用户头像');
        //     $table->string('pricname')->comment('昵称');
        //     $table->string('phone')->comment('手机号');
        //     $table->tinyInteger('sex')->comment('状态 0为男 1为女 2为保密')->default(2);
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
        // Schema::drop('details');
    }
}
