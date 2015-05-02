<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('address_line_one');
            $table->string('address_line_two');
            $table->string('fax');
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
		Schema::drop('offices');
	}

}
