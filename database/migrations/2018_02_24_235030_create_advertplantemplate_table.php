<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertplantemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertplantemplate', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->string('plan_name', 4096)->nullable();
			$table->bigInteger('media_yusen_int')->nullable();
			$table->bigInteger('busyo_sentaku_max')->nullable();
			$table->bigInteger('free_max_cont')->nullable();
			$table->bigInteger('commit_price')->nullable();
			$table->bigInteger('yonsyuu_keisai_ryoukin')->nullable();
			$table->bigInteger('tickets')->nullable();
			$table->bigInteger('is_free_plan')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('advertplantemplate');
	}

}
