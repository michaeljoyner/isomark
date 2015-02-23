<?php namespace App\Http\Controllers;

use App\Commands\Course\DeleteCourseCommand;
use App\Commands\Courses\CreateCourseCommand;
use App\Commands\Courses\EditCourseCommand;
use App\Commands\Courses\SetCourseAsBookableCommand;
use App\Courses\Course;
use App\Courses\CourseRepo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CourseFormRequest;
use Illuminate\Http\Request;

class CoursesController extends Controller {

    /**
     * @var CourseRepo
     */
    private $courseRepo;

    public function __construct(CourseRepo $courseRepo)
    {

        $this->courseRepo = $courseRepo;

        $this->middleware('auth');
    }

    public function index()
    {
        $courses = $this->courseRepo->all();

        return view('admin.courses.home')->with(compact('courses'));
    }

    public function showCategory($id)
    {
        $courses = $this->courseRepo->getCoursesByCategoryId($id);
        return view('admin.courses.index')->with(compact('courses'));
    }

    public function search(Request $request)
    {
        $courses = $this->courseRepo->getCoursesByQuery($request->get('query'));
        return view('admin.courses.home')->with(compact('courses'));
    }

    public function create()
    {
        $course = new Course();
        return view('admin.courses.create')->with(compact('course'));
    }

    public function store(CourseFormRequest $request)
    {
        $course = $this->dispatch(new CreateCourseCommand($request->all()));
        if($request->has('toggle_booking_info'))
        {
            $this->dispatch(new SetCourseAsBookableCommand(array_merge(['course_id' => $course->id], $request->only('start_date', 'end_date', 'open_date', 'close_date'))));
        }
        flash()->message('New course added!');
        return redirect('admin/courses');
    }

    public function edit($id)
    {
        $course = $this->courseRepo->getCourseById($id);
        return view('admin.courses.edit')->with(compact('course'));
    }

    public function update(CourseFormRequest $request, $id)
    {
        $this->dispatch(new EditCourseCommand(array_merge($request->all(), ['courseId' => $id])));
        if($request->has('toggle_booking_info'))
        {
            $this->dispatch(new SetCourseAsBookableCommand(array_merge(['course_id' => $id], $request->only('start_date', 'end_date', 'open_date', 'close_date'))));
        }
        flash()->message('Course updated successfully');
        return redirect('admin/courses');
    }

    public function delete($id)
    {
        $this->dispatch(new DeleteCourseCommand($id));
        flash()->message('Course deleted');
        return redirect('admin/courses');
    }

}
