<?php namespace App\Http\Controllers;

use App\Commands\Users\DeleteUserCommand;
use App\Commands\Users\EditUserCommand;
use App\Commands\Users\RegisterUserCommand;
use App\Events\UserWasRegistered;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\DeleteUserFormRequest;
use App\Http\Requests\EditUserFormRequest;
use App\Http\Requests\RegisterUserFormRequest;
use App\Users\UsersRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class UsersController extends Controller {

    /**
     * @var UsersRepository
     */
    private $usersRepo;
    /**
     * @var Guard
     */
    private $auth;

    public function __construct(UsersRepository $usersRepo, Guard $auth)
    {
        $this->auth = $auth;
        $this->usersRepo = $usersRepo;
        $this->middleware('superauth');
    }

    public function index()
    {
        $users = $this->usersRepo->all();

        return view('auth.manageusers')->with('users', $users);
	}

    public function registerUser(RegisterUserFormRequest $request)
    {
        $this->dispatch(new RegisterUserCommand($request->only('name', 'email', 'privileges', 'password')));
        flash()->message($request->get('name').' has been successfully registered.');
        return redirect('admin/users');
    }

    public function deleteUser(DeleteUserFormRequest $request, $id)
    {
        if( $this->isLastUserWithFullPrivileges($id) )
        {
            return redirect()->back()->with('deleteError', 'You must have at least one user with full privileges');
        }

        if( $this->isCurrentUser($id) )
        {
            return redirect()->back()->with('deleteError', 'You cannot delete yourself');
        }

        $this->dispatch(new DeleteUserCommand($id));
        flash()->message('The user has been deleted');
        return redirect('admin/users');
    }

    public function showEdit($id)
    {
        $user = $this->usersRepo->getUserById($id);

        return view('auth.edituser')->with('user', $user);
    }

    public function edit(EditUserFormRequest $request, $id)
    {
        $this->dispatch(new EditUserCommand($id, $request->only('name', 'email', 'privileges')));

        flash()->message($request->get('name').' has been updated');

        return redirect('admin/users');
    }

    /**
     * @param $id
     * @return bool
     */
    private function isLastUserWithFullPrivileges($id)
    {
        return $this->usersRepo->getUserById($id)->can_create_user && count($this->usersRepo->getSuperUsers()) < 2;
    }

    /**
     * @param $id
     * @return bool
     */
    private function isCurrentUser($id)
    {
        return $this->auth->id() == $id;
    }

}
