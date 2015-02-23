<?php namespace App\Handlers\Events;

use App\Events\UserWasRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class NotifyRegisteredUser extends EventHandler {

    /**
     * Create the event handler.
     *
     */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserWasRegistered  $event
	 * @return void
	 */
	public function whenUserWasRegistered(UserWasRegistered $event)
	{
		\Log::info($event->getUser()->name);
	}

}
