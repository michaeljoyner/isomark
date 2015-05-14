<?php namespace App\Http\Controllers;

use App\Commands\SendContactMessageCommand;
use App\Contacts\Address;
use App\Contacts\Person;
use App\Contacts\PhoneNumber;
use App\Courses\CourseRepo;
use App\Courses\WorkshopRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home(CourseRepo $courseRepo)
	{
        $randomCourses = [];
        $courses = $courseRepo->all();
        foreach(range(1,6) as $index) {
            $randomCourses[] = $courses->random(1);
        }
		return view('front.pages.homepage')->with(['courses' => $randomCourses]);
	}

    public function about()
    {
        return view('front.pages.about');
    }

    public function services()
    {
        return view('front.pages.services');
    }

    public function courses(CourseRepo $courseRepo, $categorySlug = null)
    {
        if(!$categorySlug) {
            return view('front.pages.coursepage');
        }
        $courses = $courseRepo->getByCategorySlug($categorySlug);
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

    public function contact()
    {
        $addresses = Address::all();
        $people = Person::all();
        $contactNumbers = PhoneNumber::all();
        return view('front.pages.contact')->with(compact('addresses', 'people', 'contactNumbers'));
    }

}
