<?php namespace App\Commands\Users;

use App\Commands\Command;

class EditUserCommand extends Command {
    /**
     * @var
     */
    private $user_id;
    private $name;
    private $email;
    private $privileges;

    /**
     * Create a new command instance.
     *
     * @param $user_id
     * @param $data
     */
	public function __construct($user_id, $data)
	{
		//
        $this->user_id = $user_id;
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->privileges = $data['privileges'];
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }



}
