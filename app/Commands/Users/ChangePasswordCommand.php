<?php
namespace App\Commands\Users;

use App\Commands\Command;

class ChangePasswordCommand extends Command {
    /**
     * @var
     */
    private $user_id;
    /**
     * @var
     */
    private $newPassword;

    /**
     * Create a new command instance.
     *
     * @param $user_id
     * @param $newPassword
     */
	public function __construct($user_id, $newPassword)
	{
		//
        $this->user_id = $user_id;
        $this->newPassword = $newPassword;
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
    public function getNewPassword()
    {
        return $this->newPassword;
    }



}
