<?php namespace App\Commands\Courses;

use App\Commands\Command;

class SetCourseAsBookableCommand extends Command {

    private $course_id;
    private $start_date;
    private $end_date;
    private $open_date;
    private $close_date;

    /**
     * Create a new command instance.
     *
     */
	public function __construct($data)
	{
		$this->course_id = $data['course_id'];
        $this->start_date = $data['start_date'];
        $this->end_date = $data['end_date'];
        $this->open_date = $data['open_date'];
        $this->close_date = $data['close_date'];
	}

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @return mixed
     */
    public function getOpenDate()
    {
        return $this->open_date;
    }

    /**
     * @return mixed
     */
    public function getCloseDate()
    {
        return $this->close_date;
    }



}
