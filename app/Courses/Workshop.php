<?php namespace App\Courses;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Workshop extends Model {

	protected $table = 'workshops';

    protected $fillable = [
        'name',
        'slug',
        'duration',
        'fee'
    ];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }

}
