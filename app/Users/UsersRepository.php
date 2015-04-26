<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 2/18/15
 * Time: 5:13 PM
 */

namespace App\Users;


use App\Events\PasswordWasChanged;
use App\Events\UserWasRegistered;
use Illuminate\Contracts\Events\Dispatcher;

class UsersRepository {

    /**
     * @var User
     */
    private $model;
    /**
     * @var Dispatcher
     */
    private $dispatcher;

    public function __construct(User $model, Dispatcher $dispatcher)
    {

        $this->model = $model;
        $this->dispatcher = $dispatcher;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getUserById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getSuperUsers()
    {
        return $this->model->where('can_create_user', true)->get();
    }

    public function store($dto)
    {
        $user = $this->model->create([
            'name' => $dto->getName(),
            'email' => $dto->getEmail(),
            'can_create_user' => $dto->getPrivileges(),
            'password' => $dto->getPassword()
        ]);

        $this->dispatcher->fire(new UserWasRegistered($user));

        return $user;
    }

    public function update($dto)
    {
        $user = $this->model->findOrFail($dto->getUserId());
        $user->name = $dto->getName();
        $user->email = $dto->getEmail();
        $user->can_create_user = $dto->getPrivileges() === 'full';
        $user->save();
    }

    public function updatePassword($id, $newPassord)
    {
        $user = $this->model->findOrFail($id);
        $user->password = $newPassord;
        $user->save();

        $this->dispatcher->fire(new PasswordWasChanged($user));
    }

    public function deleteUserById($id)
    {
        $user = $this->model->findOrFail($id);
        $user->delete();
    }

}