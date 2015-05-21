<?php namespace App\Http\Controllers\Auth;

use App\Commands\Users\ChangePasswordCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordFormRequest;
use App\Users\UsersRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset requests
	| and uses a simple trait to include this behavior. You're free to
	| explore this trait and override any methods you wish to tweak.
	|
	*/

	use ResetsPasswords;
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * Create a new password controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\PasswordBroker $passwords
     * @param UsersRepository $usersRepository
     */
	public function __construct(Guard $auth, PasswordBroker $passwords, UsersRepository $usersRepository)
	{
		$this->auth = $auth;
		$this->passwords = $passwords;

		$this->middleware('guest', ['except' => ['showPasswordChange', 'changePassword']]);
        $this->usersRepository = $usersRepository;
    }

    public function showPasswordChange($id)
    {
        $user = $this->usersRepository->getUserById($id);

        return view('auth.changepassword')->with('user', $user);
    }

    public function changePassword(ChangePasswordFormRequest $request)
    {
        if(! $this->currentPasswordMatches($request) )
        {
            return redirect()->back()->withErrors(['your current password is incorrect']);
        }
        $this->dispatch(new ChangePasswordCommand($this->auth->user()->id, $request->get('newpassword')));
        flash()->message('Your password has been successfully changed.');
        return redirect('home');
    }

    /**
     * @param ChangePasswordFormRequest $request
     * @return bool
     */
    private function currentPasswordMatches(ChangePasswordFormRequest $request)
    {
        return Hash::check($request->get('current_password'), $this->auth->user()->password);
    }

    public function postReset(Request $request)
    {
        $this->validate($request, array('token' => 'required', 'email' => 'required|email', 'password' => 'required|confirmed'));
        $credentials = $request->only('email', 'password', 'password_confirmation', 'token');
        $response = $this->passwords->reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
            $this->auth->login($user);
        });
        switch ($response) {
            case PasswordBroker::PASSWORD_RESET:
                return redirect($this->redirectPath());
            default:
                return redirect()->back()->withInput($request->only('email'))->withErrors(array('email' => trans($response)));
        }
    }


}
