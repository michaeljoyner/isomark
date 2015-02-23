<?php namespace App\Events;

use App\Events\Event;

use App\Users\User;
use Illuminate\Queue\SerializesModels;

class PasswordWasChanged extends Event {

	use SerializesModels;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new event instance.
     *
     * @param User $user
     */
	public function __construct(User $user)
	{
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }



}
