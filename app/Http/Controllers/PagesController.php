<?php namespace App\Http\Controllers;

use App\Courses\CourseRepo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home()
	{
		return view('front.pages.homepage');
	}

	public function other()
	{
		return view('front.pages.other');
	}

    public function services()
    {
        return view('front.pages.services');
    }

    public function courses(CourseRepo $courseRepo)
    {
        $list = $courseRepo->getListOfCourses();
        $courses = $courseRepo->allByName();
        return view('front.pages.courses')->with(compact('list', 'courses'));
    }

}
