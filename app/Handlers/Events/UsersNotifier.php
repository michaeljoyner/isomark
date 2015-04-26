<?php namespace App\Handlers\Events;

use App\Events\PasswordWasChanged;

use App\Mailing\AdminMailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class UsersNotifier extends EventHandler {

    /**
     * @var AdminMailer
     */
    private $mailer;

    /**
     * Create the event handler.
     *
     */
	public function __construct(AdminMailer $mailer)
	{
        $this->mailer = $mailer;
    }

	/**
	 * Handle the event.
	 *
	 * @param  PasswordWasChanged  $event
	 * @return void
	 */
	public function whenPasswordWasChanged(PasswordWasChanged $event)
	{
        $this->mailer->notifyOfPasswordChange($event->getUser());
		\Log::info($event->getUser()->name.'\'s password has changed.');
	}

}
