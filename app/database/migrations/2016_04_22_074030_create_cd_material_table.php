<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cd_material', function(Blueprint $table)
		{
			$table->string('company',10);
            $table->string('plant',10);
            $table->string('material_code',20);
            $table->string('material_name',80);
            $table->string('material_nickname',80);
            $table->string('material_pack',20);
            $table->string('material_size',80);
            $table->string('material_unit',4);
            $table->string('matrial_item',20);
            $table->string('material_type',20);
            $table->string('nicklot',20);
            $table->timestamps();

            $table->primary('material_code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cd_material');
	}

}
