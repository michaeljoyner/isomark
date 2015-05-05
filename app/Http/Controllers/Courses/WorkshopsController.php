<?php namespace App\Http\Controllers\Courses;

use App\Courses\Workshop;
use App\Courses\WorkshopRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WorkshopRequest;
use Illuminate\Http\Request;

class WorkshopsController extends Controller {

    /**
     * @var WorkshopRepository
     */
    private $workshopRepository;

    public function __construct(WorkshopRepository $workshopRepository)
    {
        $this->workshopRepository = $workshopRepository;
    }

    public function index()
    {
        $workshops = $this->workshopRepository->all();
        return view('admin.workshops.index')->with(compact('workshops'));
	}

    public function create()
    {
        $workshop = new Workshop();
        return view('admin.workshops.create')->with(compact('workshop'));
    }

    public function edit($id)
    {
        $workshop = $this->workshopRepository->findById($id);
        return view('admin.workshops.edit')->with(compact('workshop'));
    }

    public function update(WorkshopRequest $request, $id)
    {
        $this->workshopRepository->update($id, $request->all());
        flash()->message('Workshop updated successfully!');
        return redirect('admin/workshops');
    }

    public function store(WorkshopRequest $request)
    {
        $this->workshopRepository->store($request->all());
        flash()->message('New workshop created!');
        return redirect('admin/workshops');
    }

    public function deleteById($id)
    {
        $this->workshopRepository->deleteById($id);
        flash()->message('Workshop deleted!');
        return redirect('admin/workshops');
    }

}
