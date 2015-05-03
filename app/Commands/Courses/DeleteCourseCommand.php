<?php namespace App\Commands\Courses;

use App\Commands\Command;

class DeleteCourseCommand extends Command {
    /**
     * @var
     */
    public $course_id;

    /**
     * Create a new command instance.
     *
     * @param $course_id
     */
	public function __construct($course_id)
	{
        $this->course_id = $course_id;
    }
}
