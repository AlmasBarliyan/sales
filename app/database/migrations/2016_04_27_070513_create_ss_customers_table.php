<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_customers', function(Blueprint $table)
		{
			$table->string('company',10);
            $table->string('plant',10);
            $table->string('customer_code',20);
            $table->string('customer_name',80);
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
		Schema::drop('ss_customers');
	}

}
