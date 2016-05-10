<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsPoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_po', function(Blueprint $table)
		{
			$table->string('company',10);
            $table->string('plant',10);
            $table->date('so_date');
            $table->date('etd');
            $table->string('source',30);
            $table->date('eta_po');
            $table->string('customer_code',20);
            $table->string('material_item',20);
            $table->decimal('unit_price',25,3);
            $table->string('po_no',50);
            $table->date('po_date');
            $table->decimal('exclude',25,3);
            $table->decimal('include',25,3);
            $table->string('so_no',20);
            $table->date('gi_date');
            $table->string('billing_no',20);
            $table->string('surat_jalan',20);
            $table->decimal('kurs',25,3);

            $table->primary('po_no');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ss_po');
	}

}
