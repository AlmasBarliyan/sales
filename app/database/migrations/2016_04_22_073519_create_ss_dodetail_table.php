<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsDodetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_dodetail', function(Blueprint $table)
		{
			$table->string('do_no',20);
            $table->string('material_code',20);
            $table->string('lot_number',20);
            $table->decimal('qty_kgs',25,0);
            $table->decimal('qty_bag',25,0);
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
		Schema::drop('ss_dodetail');
	}

}
