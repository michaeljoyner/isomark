<?php namespace App\Commands;

use App\Commands\Command;

class SendContactMessageCommand extends Command {

    public $name;
    public $email;
    public $enquiry;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(array $data)
	{
		$this->name = $data['name'];
        $this->email = $data['email'];
        $this->enquiry = $data['enquiry'];
	}

}
