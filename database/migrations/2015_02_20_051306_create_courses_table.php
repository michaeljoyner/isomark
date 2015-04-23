<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
            $table->integer('course_category_id');
			$table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('usid');
            $table->text('aim');
            $table->text('certification');
            $table->text('description');
            $table->text('people_per_course');
            $table->text('duration');
            $table->string('fee');
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
		Schema::drop('courses');
	}

}
