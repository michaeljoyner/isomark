<?php namespace App\Handlers\Commands\Courses;

use App\Commands\Courses\CreateCourseCommand;

use App\Courses\CourseRepo;
use Illuminate\Queue\InteractsWithQueue;

class CreateCourseCommandHandler {
    /**
     * @var CourseRepo
     */
    private $courseRepo;

    /**
     * Create the command handler.
     *
     * @param CourseRepo $courseRepo
     */
	public function __construct(CourseRepo $courseRepo)
	{
        $this->courseRepo = $courseRepo;
    }

	/**
	 * Handle the command.
	 *
	 * @param  CreateCourseCommand  $command
	 * @return void
	 */
	public function handle(CreateCourseCommand $command)
	{
		return $this->courseRepo->store($command);
	}

}
