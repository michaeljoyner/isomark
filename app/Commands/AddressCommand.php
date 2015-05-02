<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class AddressCommand extends Command {

    public $name;
    public $line_one;
    public $line_two;
    public $line_three;
    public $line_four;

    /**
     * Create a new command instance.
     *
     * @param array $data
     */
	public function __construct(array $data)
	{
		$this->line_one = $data['line_one'];
        $this->line_two = $data['line_two'];
        $this->line_three = $data['line_three'];
        $this->line_four = $data['line_four'];
        $this->name = $data['name'];
	}
}
