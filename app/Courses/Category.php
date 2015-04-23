<?php namespace App\Courses;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model {

	protected $table = 'course_categories';

    protected $fillable = ['name', 'slug'];

    public function courses()
    {
        return $this->hasMany('\App\Courses\Course', 'course_category_id');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }

}
