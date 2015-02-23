<?php namespace App\Handlers\Commands\Courses;

use App\Commands\Courses\EditCourseCommand;

use App\Courses\CourseRepo;
use Illuminate\Queue\InteractsWithQueue;

class EditCourseCommandHandler {
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
	 * @param  EditCourseCommand  $command
	 * @return void
	 */
	public function handle(EditCourseCommand $command)
	{
		$this->courseRepo->update($command);
	}

}
