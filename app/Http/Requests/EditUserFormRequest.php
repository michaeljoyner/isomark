<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;

class EditUserFormRequest extends Request {

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
			'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->get('user_id'),
            'privileges' => 'required|in:full,limited'
		];
	}

}
