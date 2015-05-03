<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/3/2015
 * Time: 5:45 PM
 */

namespace App\Commands\Courses;


use App\Commands\Command;

class CourseCommand extends Command {

    public $course_category_id;
    public $name;
    public $usid;
    public $aim;
    public $certification;
    public $description;
    public $people_per_course;
    public $duration;
    public $fee;

    /**
     * Create a new command instance.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->course_category_id = $data['course_category_id'];
        $this->name = $data['name'];
        $this->usid = $data['usid'];
        $this->aim = $data['aim'];
        $this->certification = $data['certification'];
        $this->description = $data['description'];
        $this->people_per_course = $data['people_per_course'];
        $this->duration = $data['duration'];
        $this->fee = $data['fee'];
    }
}