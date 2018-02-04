<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Phpner\Adminka\Events\MigrationCreateTableEvent;

class CraeteRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('rules',function (Blueprint $table)
       {
           $table->increments('id');
           $table->string('name');


       });

       Event::fire(new MigrationCreateTableEvent($this));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rules');
    }
}
