<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
          $table->increments("id")->start_from(1);
          $table->date("day");
          $table->time("hour_start");
          $table->time("hour_end");
          $table->string("type");
          $table->time("hour_start_2")->nullable();
          $table->time("hour_end_2")->nullable();
          $table->string("type_2")->nullable();
          $table->time("hour_start_3")->nullable();
          $table->time("hour_end_3")->nullable();
          $table->string("type_3")->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memos');
    }
}
