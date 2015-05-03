<?php namespace App\Handlers\Commands\Courses;

use App\Commands\Courses\DeleteCourseCommand;

use App\Courses\CourseRepo;
use Illuminate\Queue\InteractsWithQueue;

class DeleteCourseCommandHandler {
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
	 * @param  DeleteCourseCommand  $command
	 * @return void
	 */
	public function handle(DeleteCourseCommand $command)
	{
		$this->courseRepo->deleteById($command->course_id);
	}

}
