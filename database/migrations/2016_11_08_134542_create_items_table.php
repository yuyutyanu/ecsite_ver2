<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ITEMS', function (Blueprint $table) {
          $table->increments('item_id');
          $table->string('name');
          $table->string('pass');
          $table->string('description');
          $table->string('price');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('ITEMS');
    }
}
