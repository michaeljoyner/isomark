<?php namespace App\Handlers\Commands;

use App\Commands\EditAddressCommand;

use App\Contacts\Address;
use Illuminate\Queue\InteractsWithQueue;

class EditAddressCommandHandler {

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
	 * @param  EditAddressCommand  $command
	 * @return void
	 */
	public function handle(EditAddressCommand $command)
	{
		$address = Address::find($command->address_id);
        $address->line_one = $command->line_one;
        $address->line_two = $command->line_two;
        $address->line_three = $command->line_three;
        $address->line_four = $command->line_four;
        $address->name = $command->name;
        return $address->save();
	}

}
