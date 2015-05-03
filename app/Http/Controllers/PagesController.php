<?php namespace App\Http\Controllers;

use App\Commands\SendContactMessageCommand;
use App\Courses\CourseRepo;
use App\Courses\WorkshopRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;
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

    public function courses(CourseRepo $courseRepo, $categorySlug = null)
    {
        if(!$categorySlug) {
            return view('front.pages.coursepage');
        } else {
            $courses = $courseRepo->getByCategorySlug($categorySlug);
        }
        $list = $courses->lists('name', 'slug');
        return view('front.pages.courses')->with(compact('list', 'courses'));
    }

    public function workshops(WorkshopRepository $workshopRepository)
    {
        $workshops = $workshopRepository->all();

        return view('front.pages.workshops')->with(compact('workshops'));
    }

    public function contactMessage(ContactFormRequest $request)
    {
        $this->dispatch(new SendContactMessageCommand($request->all()));

        return response()->json('okay');
    }

}
