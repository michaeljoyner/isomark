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
        return $this->model->latest()->get();
    }

    public function allFromLastWeek()
    {
        return $this->model->where('created_at', '>=', time() - (7*24*60*60))->get();
    }

    public function allFromLastMonth()
    {
        return $this->model->where('created_at', '>=', time() - (7*24*60*60))->get();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

}