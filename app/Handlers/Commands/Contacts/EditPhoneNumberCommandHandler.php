<?php namespace App\Handlers\Commands\Contacts;

use App\Commands\Contacts\EditPhoneNumberCommand;

use App\Contacts\PhoneNumber;
use Illuminate\Queue\InteractsWithQueue;

class EditPhoneNumberCommandHandler {

    /**
     * Create the command handler.
     *
     */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the command.
	 *
	 * @param  EditPhoneNumberCommand  $command
	 * @return void
	 */
	public function handle(EditPhoneNumberCommand $command)
	{
		$phoneNumber = PhoneNumber::find($command->phone_id);
        $phoneNumber->name = $command->name;
        $phoneNumber->number = $command->number;
        return $phoneNumber->save();
	}

}
