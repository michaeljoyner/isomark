<?php namespace App\Courses;

use App\Services\StyleStripper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model {


	protected $table = 'courses';

    protected $fillable = [
        'course_category_id',
        'name',
        'slug',
        'usid',
        'aim',
        'certification',
        'description',
        'people_per_course',
        'duration',
        'venue',
        'fee'
    ];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }

    public function setDescriptionAttribute($description)
    {
        $stipper = new StyleStripper();
        $this->attributes['description'] = $stipper->strip($description);
    }

    public function category()
    {
        return $this->belongsTo('\App\Courses\Category', 'course_category_id');
    }
}
