<?php namespace App\Commands;

use App\Commands\Command;

class EditAddressCommand extends AddressCommand {

    public $address_id;

	public function __construct($id, $data)
	{
		parent::__construct($data);
        $this->address_id = $id;
	}

}
