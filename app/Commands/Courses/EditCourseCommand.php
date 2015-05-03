<?php namespace App\Commands\Courses;

use App\Commands\Command;

class EditCourseCommand extends CourseCommand {

    public $id;

    public function __construct($id, array $data)
    {
        parent::__construct($data);
        $this->id = $id;
    }
}
