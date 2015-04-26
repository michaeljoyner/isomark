<?php namespace App\Handlers\Events;

use App\Events\UserWasRegistered;

use App\Mailing\AdminMailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class NotifyRegisteredUser extends EventHandler {
    /**
     * @var AdminMailer
     */
    private $adminMailer;

    /**
     * Create the event handler.
     *
     */
	public function __construct(AdminMailer $adminMailer)
	{
        $this->adminMailer = $adminMailer;
    }

	/**
	 * Handle the event.
	 *
	 * @param  UserWasRegistered  $event
	 * @return void
	 */
	public function whenUserWasRegistered(UserWasRegistered $event)
	{
        $this->adminMailer->notifyNewUserOfRegistration($event->getUser());
		\Log::info($event->getUser()->name);
	}

}
