<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookableCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookable_courses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('bookings_open');
            $table->date('bookings_close');
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
		Schema::drop('bookable_courses');
	}

}
