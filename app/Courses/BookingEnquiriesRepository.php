<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/25/2015
 * Time: 4:18 PM
 */

namespace App\Courses;


class BookingEnquiriesRepository {

    /**
     * @var BookingEnquiry
     */
    private $model;

    public function __construct(BookingEnquiry $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->where('archived', false)->latest()->get();
    }

    public function allArchived()
    {
        return $this->model->where('archived', true)->latest()->get();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function toggleReadStatus($id)
    {
        $enquiry = $this->model->findOrFail($id);
        $current_status = $enquiry->been_read;
        $enquiry->been_read = ! $current_status;
        return $enquiry->save();
    }

    public function archiveEnquiry($id)
    {
        $enquiry = $this->model->findOrFail($id);
        $enquiry->archived = true;
        return $enquiry->save();
    }

}