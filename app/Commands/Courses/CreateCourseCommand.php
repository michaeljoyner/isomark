<?php namespace App\Commands\Courses;

use App\Commands\Command;

class CreateCourseCommand extends Command {

    private $course_category_id;
    private $name;
    private $usid;
    private $aim;
    private $certification;
    private $description;
    private $people_per_course;
    private $duration;
    private $venue;
    private $fee;

    /**
     * Create a new command instance.
     *
     */
	public function __construct($data)
	{
        $this->course_category_id = $data['course_category_id'];
		$this->name = $data['name'];
        $this->usid = $data['usid'];
        $this->aim = $data['aim'];
        $this->certification = $data['certification'];
        $this->description = $data['description'];
        $this->people_per_course = $data['people_per_course'];
        $this->duration = $data['duration'];
        $this->venue = $data['venue'];
        $this->fee = $data['fee'];
	}

    /**
     * @return mixed
     */
    public function getCourseCategoryId()
    {
        return $this->course_category_id;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUsid()
    {
        return $this->usid;
    }

    /**
     * @return mixed
     */
    public function getAim()
    {
        return $this->aim;
    }

    /**
     * @return mixed
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPeoplePerCourse()
    {
        return $this->people_per_course;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }



}
