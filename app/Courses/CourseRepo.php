<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 2/20/15
 * Time: 2:24 PM
 */

namespace App\Courses;


use App\Commands\Courses\CreateCourseCommand;
use App\Commands\Courses\EditCourseCommand;
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

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->firstOrFail();
    }

    public function getCoursesByCategoryId($id)
    {
        return $this->model->where('course_category_id', $id)->with('category')->latest()->get();
    }

    public function getByCategorySlug($slug)
    {
        return $this->model->whereHas('category', function($query) use ($slug)
        {
            $query->where('slug', $slug);
        })->get();
    }

    public function getCourseById($id)
    {
        return $this->model->with('category')->findOrFail($id);
    }

    public function store(CreateCourseCommand $dto)
    {
        $course = $this->model->create([
            'course_category_id' => $dto->course_category_id,
            'name'              => $dto->name,
            'usid'              => $dto->usid,
            'aim'               => $dto->aim,
            'certification'     => $dto->certification,
            'description'       => $dto->description,
            'people_per_course' => $dto->people_per_course,
            'duration'          => $dto->duration,
            'fee'               => $dto->fee
        ]);

        return $course;
    }

    public function getCoursesBySearchQuery($query)
    {
        return $this->model->where('name','LIKE', "%$query%")->with('category')->latest()->get();
    }

    public function update(EditCourseCommand $dto)
    {
        $course = $this->model->findOrFail($dto->id);
        $course->course_category_id = $dto->course_category_id;
        $course->name = $dto->name;
        $course->usid = $dto->usid;
        $course->aim = $dto->aim;
        $course->certification = $dto->certification;
        $course->description = $dto->description;
        $course->people_per_course = $dto->people_per_course;
        $course->duration = $dto->duration;
        $course->fee = $dto->fee;
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