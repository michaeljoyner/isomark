<?php namespace App\Handlers\Commands;

use App\Commands\EditUserCommand;

use App\Users\UsersRepository;
use Illuminate\Queue\InteractsWithQueue;

class EditUserCommandHandler {
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * Create the command handler.
     *
     * @param UsersRepository $usersRepository
     */
	public function __construct(UsersRepository $usersRepository)
	{
		//
        $this->usersRepository = $usersRepository;
    }

	/**
	 * Handle the command.
	 *
	 * @param  EditUserCommand  $command
	 * @return void
	 */
	public function handle(EditUserCommand $command)
	{
		$this->usersRepository->update($command);
	}

}
