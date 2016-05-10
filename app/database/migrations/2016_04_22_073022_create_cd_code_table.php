<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cd_code', function(Blueprint $table)
		{
			$table->string('hcode',10);
            $table->string('code',10);
            $table->string('code_name',50);
            $table->string('desc1',100);
            $table->string('desc2',100);
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cd_code');
	}

}
