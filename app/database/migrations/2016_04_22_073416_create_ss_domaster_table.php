<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsDomasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_domaster', function(Blueprint $table)
		{
			$table->string('company',10);
            $table->string('plant',10);
            $table->string('do_no',20);
            $table->string('po_no',20);
            $table->string('customer_code',20);
            $table->date('po_date');
            $table->text('remark');
            $table->timestamps();

            $table->primary('do_no');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ss_domaster');
	}

}
