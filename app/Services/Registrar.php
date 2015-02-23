<?php namespace App\Services;

use App\Users\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
        $can_create_user = $data['privileges'] === 'full' ? true : false;
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
            'can_create_user' => $can_create_user,
			'password' => bcrypt($data['password']),
		]);
	}

}
