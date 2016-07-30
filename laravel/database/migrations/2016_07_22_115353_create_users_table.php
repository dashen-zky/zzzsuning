<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //  Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id')->comment('自增主键id');
        //     $table->string('username')->comment('用户名');
        //     $table->string('password')->comment('密码');
        //     $table->string('email')->comment('邮箱')->unique();
        //     $table->string('token')->comment('随机字符串');
        //     $table->string('lasttime')->comment('最后登录的时间');
        //     $table->tinyInteger('auth')->comment('状态 0为未激活 1为已激活')->default(0);
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
        // Schema::drop('users');
    }
}
