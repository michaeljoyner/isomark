<?php namespace App\Courses;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'course_categories';

    protected $fillable = ['name', 'slug'];

    public function courses()
    {
        return $this->hasMany('\App\Courses\Course', 'course_category_id');
    }

}
