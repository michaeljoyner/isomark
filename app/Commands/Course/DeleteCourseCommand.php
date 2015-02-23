<?php namespace App\Commands\Course;

use App\Commands\Command;

class DeleteCourseCommand extends Command {
    /**
     * @var
     */
    private $course_id;


    /**
     * Create a new command instance.
     *
     * @param $course_id
     */
	public function __construct($course_id)
	{
		//
        $this->course_id = $course_id;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }



}
