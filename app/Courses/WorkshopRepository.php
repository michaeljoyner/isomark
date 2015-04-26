<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/24/2015
 * Time: 9:21 AM
 */

namespace App\Courses;


class WorkshopRepository {

    /**
     * @var Workshop
     */
    private $model;

    public function __construct(Workshop $model)
    {

        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('name')->get();
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->firstOrFail();
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $workshop = $this->model->findOrFail($id);
        $workshop->fill($data);

        return $workshop->save();
    }

    public function deleteById($id)
    {
        $workshop = $this->model->findOrFail($id);

        return $workshop->delete();
    }

}