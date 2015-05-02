<?php namespace App\Handlers\Commands;

use App\Commands\CreatePersonCommand;

use App\Contacts\Person;
use Illuminate\Queue\InteractsWithQueue;

class CreatePersonCommandHandler {

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
	 * @param  CreatePersonCommand  $command
	 * @return void
	 */
	public function handle(CreatePersonCommand $command)
	{
		return Person::create([
            'name' => $command->name,
            'email' => $command->email,
            'title' => $command->title,
            'phone' => $command->phone
        ]);
	}

}
