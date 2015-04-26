<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingEnquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking_enquiries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->text('course_names');
            $table->text('course_usids');
            $table->text('enquiry');
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
		Schema::drop('booking_enquiries');
	}

}
