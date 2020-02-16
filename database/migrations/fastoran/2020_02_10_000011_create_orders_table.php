<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'orders';

    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('rest');
            $table->integer('user');
            $table->integer('summ');
            $table->integer('pers');
            $table->date('dat');
            $table->time('tim');
            $table->text('remark');
            $table->integer('gosti');
            $table->integer('sdacha');
            $table->integer('delivery_price');
            $table->integer('status');
            $table->string('delivery_range', 10);
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
