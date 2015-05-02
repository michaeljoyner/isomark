<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class PhoneNumberCommand extends Command {

    /**
     * @var
     */
    public $number;
    public $name;

    /**
     * Create a new command instance.
     *
     * @param array $data
     */
	public function __construct(array $data)
	{
        $this->name = $data['name'];
        $this->number = $data['number'];
    }
}
