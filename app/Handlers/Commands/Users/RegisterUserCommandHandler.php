<?php namespace App\Handlers\Commands\Users;

use App\Commands\Users\RegisterUserCommand;

use App\Users\UsersRepository;
use Illuminate\Queue\InteractsWithQueue;

class RegisterUserCommandHandler {
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
        $this->usersRepository = $usersRepository;
    }

	/**
	 * Handle the command.
	 *
	 * @param  RegisterUserCommand  $command
	 * @return void
	 */
	public function handle(RegisterUserCommand $command)
	{
		return $this->usersRepository->store($command);
	}

}
