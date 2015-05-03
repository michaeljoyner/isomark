<?php namespace App\Commands\Contacts;

use App\Commands\Command;

class EditPhoneNumberCommand extends PhoneNumberCommand {


    /**
     * @var array
     */
    public $phone_id;

    public function __construct($phone_id, array $data)
	{
		parent::__construct($data);
        $this->phone_id = $phone_id;
    }

}
