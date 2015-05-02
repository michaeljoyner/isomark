<?php namespace App\Contacts;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	protected $table = 'people';

    protected $fillable = [
        'name',
        'title',
        'email',
        'phone'
    ];

    public function phone()
    {
        return $this->hasOne('App\Contacts\PhoneNumber', 'phone_id');
    }

}
