<?php namespace
App\Handlers\Commands\Users;

use App\Commands\Users\ChangePasswordCommand;

use App\Users\UsersRepository;
use Illuminate\Queue\InteractsWithQueue;

class ChangePasswordCommandHandler {
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
	 * @param  ChangePasswordCommand  $command
	 * @return void
	 */
	public function handle(ChangePasswordCommand $command)
	{
		$this->usersRepository->updatePassword($command->getUserId(), $command->getNewPassword());
	}

}
