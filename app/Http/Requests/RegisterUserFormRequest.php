<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;

class RegisterUserFormRequest extends Request {

    /**
     * @var Guard
     */
    private $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;
    }

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        return $this->auth->user()->can_create_user;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'privileges' => 'required|in:full,limited',
            'password' => 'required|confirmed|min:6',
		];
	}

}
