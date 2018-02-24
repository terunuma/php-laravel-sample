<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractorinfomationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contractorinfomation', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->string('prefix', 512);
			$table->string('company_name', 4096)->nullable();
			$table->string('company_adress', 4096)->nullable();
			$table->string('tantou_name_mei', 4096)->nullable();
			$table->string('tantou_name_sei', 4096)->nullable();
			$table->string('tantou_sei_kana', 4096)->nullable();
			$table->string('tantou_mei_kana', 4096)->nullable();
			$table->string('tantou_busyo', 4096)->nullable();
			$table->string('tantou_pason', 4096)->nullable();
			$table->string('company_tel', 512)->nullable();
			$table->string('mail_adress', 512)->unique('contractorinfomation_mail_adress_key');
			$table->string('change_mail_adress', 512)->nullable();
			$table->string('company_url', 512)->nullable();
			$table->string('password', 4096)->nullable();
			$table->string('match_busyo_id', 512)->nullable();
			$table->string('match_gyousyu_id', 512)->nullable();
			$table->string('match_aria_id', 512)->nullable();
			$table->string('furikomi_bankname', 4096)->nullable();
			$table->string('furikomi_banksyubetsu', 4096)->nullable();
			$table->string('furikomi_bankshitenmei', 4096)->nullable();
			$table->string('furikomi_banknumber', 4096)->nullable();
			$table->string('furikomi_bankmeigi', 4096)->nullable();
			$table->dateTime('touroku_date')->default('now()');
			$table->string('yuubin_bangou', 64)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contractorinfomation');
	}

}
