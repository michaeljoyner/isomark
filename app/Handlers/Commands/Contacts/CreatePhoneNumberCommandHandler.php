<?php namespace App\Handlers\Commands\Contacts;

use App\Commands\Contacts\CreatePhoneNumberCommand;

use App\Contacts\PhoneNumber;
use Illuminate\Queue\InteractsWithQueue;

class CreatePhoneNumberCommandHandler {

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
	 * @param  CreatePhoneNumberCommand  $command
	 * @return void
	 */
	public function handle(CreatePhoneNumberCommand $command)
	{
		return PhoneNumber::create([
            'name' => $command->name,
            'number' => $command->number
        ]);
	}

}
