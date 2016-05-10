<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_inventory', function(Blueprint $table)
		{
			$table->string('company',10);
            $table->string('plant',10);
            $table->string('material_code',20);
            $table->string('material_name',80);
            $table->string('lot_number',20);
            $table->decimal('good_qty_bag',25,0);
            $table->decimal('good_qty_kgs',25,0);
            $table->decimal('bad_qty_bag',25,0);
            $table->decimal('bad_qty_kgs',25,0);
            $table->decimal('result_bag',25,0);
            $table->decimal('result_kgs',25,0);
            $table->string('storage',20);
            $table->date('date_ym');
            $table->enum('status', ['G', 'B']);
            $table->text('remark');
            $table->timestamps();

            $table->primary(['material_code','lot_number']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ss_inventory');
	}

}
