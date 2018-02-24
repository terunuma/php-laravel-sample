<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsignorinfomationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consignorinfomation', function(Blueprint $table)
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
			$table->string('mail_adress', 512)->nullable();
			$table->string('change_mail_adress', 512)->nullable();
			$table->string('company_url', 512)->nullable();
			$table->string('password', 4096)->nullable();
			$table->string('seikyusaki_corpname', 4096)->nullable();
			$table->string('seikyusaki_tantou_sei', 4096)->nullable();
			$table->string('seikyusaki_tantou_mei', 4096)->nullable();
			$table->string('seikyusaki_tantou_busyo', 4096)->nullable();
			$table->string('seikyusaki_tantou_yakusyoku', 4096)->nullable();
			$table->string('seikyusaki_corptel', 4096)->nullable();
			$table->dateTime('touroku_date')->default('now()');
			$table->string('seikyusaki_company_adress', 4096)->nullable();
			$table->string('yuubin_bangou', 64)->nullable();
			$table->integer('add_staff_id')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consignorinfomation');
	}

}
