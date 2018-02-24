<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgreedocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agreedocument', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->bigInteger('conpany_id');
			$table->string('agreement_filenamee', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agreedocument');
	}

}
