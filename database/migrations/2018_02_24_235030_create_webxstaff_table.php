<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebxstaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webxstaff', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->string('staff_name', 4096)->nullable();
			$table->string('ex1', 4096)->nullable();
			$table->string('ex2', 4096)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webxstaff');
	}

}
