<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'menu';

    /**
     * Run the migrations.
     * @table menu
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('food_name', 100);
            $table->text('food_remark');
            $table->string('food_ext', 50);
            $table->integer('food_price');
            $table->integer('food_rubr');
            $table->integer('food_razdel');
            $table->integer('rest');
            $table->integer('food_category');
            $table->string('food_img', 80);
            $table->integer('bonus');
            $table->integer('stop_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
