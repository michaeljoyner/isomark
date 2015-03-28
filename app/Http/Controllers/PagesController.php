<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home()
	{
		return view('front.pages.homepage');
	}

	public function other()
	{
		return view('front.pages.other');
	}

}
