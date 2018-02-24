<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGyousyugyoutaiinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gyousyugyoutaiinfo', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->string('gyousyu_gyoutaimei', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gyousyugyoutaiinfo');
	}

}
