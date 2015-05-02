<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class PersonCommand extends Command {

    public $name;
    public $title;
    public $phone;
    public $email;

    /**
     * Create a new command instance.
     *
     * @param array $data
     */
	public function __construct(array $data)
	{
		$this->name = $data['name'];
        $this->title = $data['title'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
	}
}
