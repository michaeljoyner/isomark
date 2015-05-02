<?php namespace App\Handlers\Commands;

use App\Commands\EditPhoneNumberCommand;

use App\Contacts\PhoneNumber;
use Illuminate\Queue\InteractsWithQueue;

class EditPhoneNumberCommandHandler {

	/**
	 * Create the command handler.
	 *
	 * @return void
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
