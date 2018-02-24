<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIntroductioniformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('introductioniformation', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->bigInteger('commoditiy_id')->nullable();
			$table->string('status', 512)->nullable();
			$table->bigInteger('contract_applications_id');
			$table->string('company_name', 4096)->nullable();
			$table->string('company_adress', 4096)->nullable();
			$table->string('tantou_name_mei', 4096)->nullable();
			$table->string('tantou_name_sei', 4096)->nullable();
			$table->string('tantou_sei_kana', 4096)->nullable();
			$table->string('tantou_mei_kana', 4096)->nullable();
			$table->string('busyoindo_id', 4096)->nullable();
			$table->string('company_tel', 512)->nullable();
			$table->string('mail_adress', 512)->nullable();
			$table->dateTime('touroku_date')->default('now()');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('introductioniformation');
	}

}
