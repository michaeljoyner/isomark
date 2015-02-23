<?php namespace App\Courses;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BookableCourse extends Model {

	protected $table = "bookable_courses";

    protected $fillable = [
        'course_id',
        'start_date',
        'end_date',
        'bookings_open',
        'bookings_close'
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'bookings_open',
        'bookings_close'
    ];


    public function getStartDateAttribute($value)
    {
        return $this->createFormattedDateStringFromCarbon($value);
    }

    public function getEndDateAttribute($value)
    {
        return $this->createFormattedDateStringFromCarbon($value);
    }

    public function getBookingsOpenAttribute($value)
    {
        return $this->createFormattedDateStringFromCarbon($value);
    }

    public function getBookingsCloseAttribute($value)
    {
        return $this->createFormattedDateStringFromCarbon($value);
    }

    /**
     * @param $value
     * @return string
     */
    private function createFormattedDateStringFromCarbon($value)
    {
        $date = new Carbon($value);
        return $date->toDateString();
    }

}
