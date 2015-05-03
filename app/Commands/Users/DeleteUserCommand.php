<?php namespace App\Commands\Users;

use App\Commands\Command;

class DeleteUserCommand extends Command {
    /**
     * @var
     */
    private $user_id;

    /**
     * Create a new command instance.
     *
     * @param $user_id
     */
	public function __construct($user_id)
	{
		//
        $this->user_id = $user_id;
    }

    public function getId()
    {
        return $this->user_id;
    }

}
