<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 2/20/15
 * Time: 2:24 PM
 */

namespace App\Courses;


use App\Commands\Courses\CreateCourseCommand;
use Illuminate\Support\Str;

class CourseRepo {

    /**
     * @var Course
     */
    private $model;

    public function __construct(Course $model)
    {

        $this->model = $model;
    }

    public function all()
    {
        return $this->model->with('category')->latest()->get();
    }

    public function allByName()
    {
        return $this->model->with('category')->orderBy('name', 'asc')->get();
    }

    public function getCoursesByCategoryId($id)
    {
        return $this->model->where('course_category_id', $id)->with('category')->latest()->get();
    }

    public function getCourseById($id)
    {
        return $this->model->with('category')->findOrFail($id);
    }

    public function store(CreateCourseCommand $dto)
    {
        $course = $this->model->create([
            'course_category_id' => $dto->getCourseCategoryId(),
            'name'              => $dto->getName(),
            'slug'              => Str::slug($dto->getName()),
            'usid'              => $dto->getUsid(),
            'aim'               => $dto->getAim(),
            'certification'     => $dto->getCertification(),
            'description'       => $dto->getDescription(),
            'people_per_course' => $dto->getPeoplePerCourse(),
            'duration'          => $dto->getDuration(),
            'fee'               => $dto->getFee()
        ]);

        return $course;
    }

    public function getCoursesByQuery($query)
    {
        return $this->model->where('name','LIKE', "%$query%")->with('category')->latest()->get();
    }

    public function update($dto)
    {
        $course = $this->model->findOrFail($dto->getId());
        $course->course_category_id = $dto->getCourseCategoryId();
        $course->name = $dto->getName();
        $course->slug = Str::slug($dto->getName());
        $course->usid = $dto->getUsid();
        $course->aim = $dto->getAim();
        $course->certification = $dto->getCertification();
        $course->description = $dto->getDescription();
        $course->people_per_course = $dto->getPeoplePerCourse();
        $course->duration = $dto->getDuration();
        $course->fee = $dto->getFee();
        $course->save();
    }

    public function deleteById($id)
    {
        $course = $this->model->findOrFail($id);
        $course->delete();
    }

    public function getListOfCourses()
    {
        return $this->model->orderBy('name', 'asc')->get()->lists('name', 'slug');
    }

}