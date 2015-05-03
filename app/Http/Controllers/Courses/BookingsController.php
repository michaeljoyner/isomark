<?php namespace App\Http\Controllers\Courses;

use App\Courses\BookingEnquiriesRepository;
use App\Courses\CourseRepo;
use App\Courses\WorkshopRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CourseBookingRequest;
use Illuminate\Http\Request;

class BookingsController extends Controller {

    /**
     * @var BookingEnquiriesRepository
     */
    private $enquiriesRepository;
    /**
     * @var CourseRepo
     */
    private $courseRepo;

    public function __construct(BookingEnquiriesRepository $enquiriesRepository, CourseRepo $courseRepo)
    {
        $this->enquiriesRepository = $enquiriesRepository;
        $this->courseRepo = $courseRepo;
    }

    public function index()
    {
        $enquiries = $this->enquiriesRepository->all();
        $weeksEnquiries = $enquiries->filter(function($item)
        {
           return  $item->created_at->diffInDays() <= 7;
        });
        $monthsEnquiries = $enquiries->filter(function($item)
        {
            return  $item->created_at->diffInDays() > 7 && $item->created_at->diffInDays() < 31;
        });
        $oldEnquiries = $enquiries->filter(function($item)
        {
            return  $item->created_at->diffInDays() >= 31;
        });



        return view('admin.bookings.index')->with(compact('weeksEnquiries', 'monthsEnquiries', 'oldEnquiries'));
    }

    public function create($courseSlug = null)
    {
        if($courseSlug) {
            $course = $this->courseRepo->getBySlug($courseSlug);
            $course_names = $course->name;
            $course_usids = $course->usid;
            return view('front.pages.bookings')->with(compact('course_names', 'course_usids'));
        }

        return view('front.pages.bookings');
    }

    public function createWorkshopBooking($workshopSlug, WorkshopRepository $workshopRepository)
    {
        $workshop = $workshopRepository->findBySlug($workshopSlug);
        $course_names = $workshop->name;
        $course_usids = 'Workshop';

        return view('front.pages.bookings')->with(compact('course_names', 'course_usids'));
    }

    public function store(CourseBookingRequest $request)
    {
        $this->enquiriesRepository->store($request->all());

        return redirect('courses');
    }

    public function toggleRead($id)
    {
        if($this->enquiriesRepository->toggleReadStatus($id))
        {
            return response()->json('okay');
        }
        return response()->json('failed', 400);
    }

    public function archive($id)
    {
        if($this->enquiriesRepository->archiveEnquiry($id))
        {
            return response()->json('okay');
        }
        return response()->json('failed', 400);
    }

    public function archivedIndex()
    {
        $enquiries = $this->enquiriesRepository->allArchived();
        return view('admin.bookings.archives')->with(compact('enquiries'));
    }

}
