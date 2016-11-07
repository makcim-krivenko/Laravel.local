<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id');
            $table->string('key');
            $table->string('value', 10000);
        });

        Schema::table('language_values' , function(Blueprint $table) {
            $table->foreign('language_id')
                ->references('id')->on('languages')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('language_values' , function(Blueprint $table) {
            $table->unique('language_id', 'key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('language_values');
    }
}
