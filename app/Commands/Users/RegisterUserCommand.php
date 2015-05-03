<?php namespace App\Commands\Users;

use App\Commands\Command;

class RegisterUserCommand extends Command {

    private $name;
    private $email;
    private $privileges;
    private $password;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($data)
	{
		$this->name = $data['name'];
        $this->email = $data['email'];
        $this->privileges = $data['privileges'];
        $this->password = $data['password'];
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
        return $this->privileges === 'full';
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }



}
