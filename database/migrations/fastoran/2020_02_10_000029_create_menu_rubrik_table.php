<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuRubrikTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'menu_rubrik';

    /**
     * Run the migrations.
     * @table menu_rubrik
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('rest');
            $table->integer('cat');
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
