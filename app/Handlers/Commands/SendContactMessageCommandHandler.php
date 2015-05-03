<?php namespace App\Handlers\Commands;

use App\Commands\SendContactMessageCommand;

use App\Mailing\AdminMailer;
use Illuminate\Queue\InteractsWithQueue;

class SendContactMessageCommandHandler {

    /**
     * @var AdminMailer
     */
    private $adminMailer;

    /**
     * Create the command handler.
     *
     */
	public function __construct(AdminMailer $adminMailer)
	{
		//
        $this->adminMailer = $adminMailer;
    }

	/**
	 * Handle the command.
	 *
	 * @param  SendContactMessageCommand  $command
	 * @return void
	 */
	public function handle(SendContactMessageCommand $command)
	{
		$this->adminMailer->sendSiteMessage($command->name, $command->email, $command->enquiry);
	}

}
