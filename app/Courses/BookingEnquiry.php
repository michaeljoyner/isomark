<?php namespace App\Courses;

use Illuminate\Database\Eloquent\Model;

class BookingEnquiry extends Model {

	protected $table = 'booking_enquiries';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'course_names',
        'course_usids',
        'enquiry'
    ];
}
