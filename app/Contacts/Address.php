<?php namespace App\Contacts;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	protected $table = 'addresses';

    protected $fillable = [
        'name',
        'line_one',
        'line_two',
        'line_three',
        'line_four'
    ];

}
