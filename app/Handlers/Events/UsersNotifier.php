<?php namespace App\Handlers\Events;

use App\Events\PasswordWasChanged;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class UsersNotifier extends EventHandler {

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
	 * @param  PasswordWasChanged  $event
	 * @return void
	 */
	public function whenPasswordWasChanged(PasswordWasChanged $event)
	{
		\Log::info($event->getUser()->name.'\'s has changed.');
	}

}
