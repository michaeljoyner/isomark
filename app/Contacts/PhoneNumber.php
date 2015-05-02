<?php namespace App\Contacts;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model {

	protected $table = "phone_numbers";

    protected $fillable = [
        'name',
        'number'
    ];

}
