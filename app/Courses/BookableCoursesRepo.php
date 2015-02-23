<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 2/23/15
 * Time: 12:41 PM
 */

namespace App\Courses;


use App\Commands\Courses\SetCourseAsBookableCommand;

class BookableCoursesRepo {

    /**
     * @var BookableCourse
     */
    private $model;

    public function __construct(BookableCourse $model)
    {

        $this->model = $model;
    }

    public function store(SetCourseAsBookableCommand $dto)
    {
        $this->model->create([
            'course_id' => $dto->getCourseId(),
            'start_date' => $dto->getStartDate(),
            'end_date' => $dto->getEndDate(),
            'bookings_open' => $dto->getOpenDate(),
            'bookings_close' => $dto->getCloseDate()
        ]);
    }

    public function update(SetCourseAsBookableCommand $dto)
    {
        $bookable = $this->model->where('course_id', $dto->getCourseId())->first();
        if($bookable)
        {
            $bookable->start_date = $dto->getStartDate();
            $bookable->end_date = $dto->getEndDate();
            $bookable->bookings_open = $dto->getOpenDate();
            $bookable->bookings_close = $dto->getCloseDate();
            $bookable->save();
        }
    }

    public function hasCourseEntry($courseId)
    {
        return count($this->model->where('course_id', $courseId)->get()) > 0;
    }

}