<?php namespace App\Handlers\Commands;

use App\Commands\CreateAddressCommand;

use App\Contacts\Address;
use Illuminate\Queue\InteractsWithQueue;

class CreateAddressCommandHandler {

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
	 * @param  CreateAddressCommand  $command
	 * @return void
	 */
	public function handle(CreateAddressCommand $command)
	{
		return Address::create([
            'line_one' => $command->line_one,
            'line_two' => $command->line_two,
            'line_three' => $command->line_three,
            'line_four' => $command->line_four,
            'name' => $command->name
        ]);
	}

}
