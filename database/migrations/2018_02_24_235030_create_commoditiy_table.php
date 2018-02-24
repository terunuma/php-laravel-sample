<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommoditiyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commoditiy', function(Blueprint $table)
		{
			$table->integer('plimary', true);
			$table->bigInteger('id')->default(-1);
			$table->bigInteger('advert_id')->nullable();
			$table->string('syouzaimei', 4096)->nullable();
			$table->string('oomidashi', 4096)->nullable();
			$table->string('bissiness_tokucyou_id', 512)->nullable();
			$table->string('main1_midashi', 4096)->nullable();
			$table->string('main1_honbun', 65535)->nullable();
			$table->string('main1_filename', 512)->nullable();
			$table->string('main2_midashi', 4096)->nullable();
			$table->string('main2_honbun', 65535)->nullable();
			$table->string('main2_filename', 512)->nullable();
			$table->string('main3_midashi', 4096)->nullable();
			$table->string('main3_honbun', 65535)->nullable();
			$table->string('main3_filename', 512)->nullable();
			$table->string('osusume_point', 65535)->nullable();
			$table->string('bisyuu_taisyou', 65535)->nullable();
			$table->string('sales_talk_rei', 65535)->nullable();
			$table->string('match_busyo_id', 512)->nullable();
			$table->string('match_gyousyu_id', 512)->nullable();
			$table->string('match_aria_id', 512)->nullable();
			$table->bigInteger('syoukai_tesuuryou_id');
			$table->string('bisiness_syokihiyou', 65535)->nullable();
			$table->string('kaiinn_heno_messages', 65535)->nullable();
			$table->string('tousyani_tsuite_honbun', 65535)->nullable();
			$table->string('company_name', 512)->nullable();
			$table->string('company_adress', 512)->nullable();
			$table->string('company_tel', 512)->nullable();
			$table->string('company_mail_adress', 512)->nullable();
			$table->string('company_presitent', 4096)->nullable();
			$table->string('company_barthday', 512)->nullable();
			$table->string('company_url', 512)->nullable();
			$table->string('company_jigyou_naiyou', 4096)->nullable();
			$table->dateTime('touroku_date')->nullable()->default('now()');
			$table->bigInteger('shinsa_status')->nullable();
			$table->dateTime('shinsa_ok_date')->nullable();
			$table->bigInteger('view_score')->nullable();
			$table->bigInteger('tesuusyou_taikei_id')->nullable();
			$table->string('document_filename', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commoditiy');
	}

}
