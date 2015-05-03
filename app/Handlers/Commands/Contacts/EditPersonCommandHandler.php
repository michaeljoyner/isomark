<?php namespace App\Handlers\Commands\Contacts;

use App\Commands\Contacts\EditPersonCommand;

use App\Contacts\Person;
use Illuminate\Queue\InteractsWithQueue;

class EditPersonCommandHandler {

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
	 * @param  EditPersonCommand  $command
	 * @return void
	 */
	public function handle(EditPersonCommand $command)
	{
		$person = Person::find($command->person_id);
        $person->name = $command->name;
        $person->title = $command->title;
        $person->phone = $command->phone;
        $person->email = $command->email;
        return $person->save();
	}

}
