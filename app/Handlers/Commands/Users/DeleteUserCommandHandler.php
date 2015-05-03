<?php namespace App\Handlers\Commands\Users;

use App\Commands\Users\DeleteUserCommand;

use App\Users\UsersRepository;
use Illuminate\Queue\InteractsWithQueue;

class DeleteUserCommandHandler {
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
	 * @param  DeleteUserCommand  $command
	 * @return void
	 */
	public function handle(DeleteUserCommand $command)
	{
		$this->usersRepository->deleteUserById($command->getId());
	}

}
