<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractapplicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contractapplication', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->bigInteger('commoditiy_id')->nullable();
			$table->bigInteger('contractor_info_id')->nullable();
			$table->bigInteger('status')->nullable();
			$table->bigInteger('keiyaku_syubetsu')->nullable();
			$table->dateTime('touroku_date')->default('now()');
			$table->string('keiyaku_docs_ids', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contractapplication');
	}

}
