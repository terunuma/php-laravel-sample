<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsignoragreementmanageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consignoragreementmanage', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->bigInteger('conpany_id')->nullable();
			$table->string('plan_name', 4096)->nullable();
			$table->bigInteger('media_yusen_int')->nullable();
			$table->bigInteger('busyo_sentaku_max')->nullable();
			$table->dateTime('agree_start_date')->nullable();
			$table->bigInteger('free_max_cont')->nullable();
			$table->bigInteger('commit_price')->nullable();
			$table->bigInteger('yonsyuu_keisai_ryoukin')->nullable();
			$table->bigInteger('tickets')->nullable();
			$table->dateTime('add_date')->nullable();
			$table->bigInteger('is_free_plan')->nullable();
			$table->bigInteger('commodity_id')->nullable();
			$table->dateTime('touroku_date')->nullable()->default('now()');
			$table->dateTime('otameshi_end_date')->nullable();
			$table->bigInteger('advert_status')->nullable();
			$table->string('plan_option', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consignoragreementmanage');
	}

}
