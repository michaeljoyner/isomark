<?php namespace App\Commands;

use App\Commands\Command;

class EditPersonCommand extends PersonCommand {

	public $person_id;

	public function __construct($person_id, array $data)
	{
		parent::__construct($data);
        $this->person_id = $person_id;
    }

}
