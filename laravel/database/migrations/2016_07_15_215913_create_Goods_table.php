<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('goods', function (Blueprint $table) {
            $table->increments("id")->comment("主键自增id");
            $table->integer("type_id")->comment("外键 商品类别id");
            $table->integer("brand_id")->comment("外键 商品品牌id");
            $table->integer("cate_id")->comment("外键 商品分类id");
            $table->string("name")->comment("商品的名称");
            $table->string("title")->comment("商品的标题");
            $table->decimal('price', 10, 2)->comment("商品的价格");
            $table->string("img")->comment("商品的主图");
            $table->tinyInteger("status")->comment("商品的状态");
            $table->text("content")->comment("商品的内容");
            $table->timestamps();

       });
=======
        // Schema::create('goods', function (Blueprint $table) {
            // $table->increments("id")->comment("主键自增id");
            // $table->integer("type_id")->comment("外键 商品类别id");
            // $table->integer("brand_id")->comment("外键 商品品牌id");
            // $table->integer("cate_id")->comment("外键 商品分类id");
            // $table->string("name")->comment("商品的名称");
            // $table->string("title")->comment("商品的标题");
            // $table->decimal('price', 10, 2)->comment("商品的价格");
            // $table->string("img")->comment("商品的主图");
            // $table->tinyInteger("status")->comment("商品的状态");
            // $table->text("content")->comment("商品的内容");
            // $table->timestamps();

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
        Schema::drop("goods");
=======
        // Schema::drop("goods");
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}

?>