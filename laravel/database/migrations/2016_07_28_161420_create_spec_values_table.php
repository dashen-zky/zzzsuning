<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('spec_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("规格值名称");
            $table->integer("spec_id")->comment("规格值id");
            $table->tinyInteger("status")->comment("规格状态")->default(0);
            $table->timestamps();

        });
=======
        // Schema::create('spec_values', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("规格值名称");
        //     $table->integer("spec_id")->comment("规格值id");
        //     $table->tinyInteger("status")->comment("规格状态")->default(0);
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
        Schema::drop('spec_values');
=======
        // Schema::drop('spec_values');
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    }
}
