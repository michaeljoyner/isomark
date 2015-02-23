<?php namespace App\Handlers\Commands\Courses;

use App\Commands\Courses\SetCourseAsBookableCommand;

use App\Courses\BookableCoursesRepo;
use Illuminate\Queue\InteractsWithQueue;

class SetCourseAsBookableCommandHandler {
    /**
     * @var BookableCoursesRepo
     */
    private $bookableCoursesRepo;

    /**
     * Create the command handler.
     *
     * @param BookableCoursesRepo $bookableCoursesRepo
     */
	public function __construct(BookableCoursesRepo $bookableCoursesRepo)
	{
        $this->bookableCoursesRepo = $bookableCoursesRepo;
    }

	/**
	 * Handle the command.
	 *
	 * @param  SetCourseAsBookableCommand  $command
	 * @return void
	 */
	public function handle(SetCourseAsBookableCommand $command)
	{
        if($this->bookableCoursesRepo->hasCourseEntry($command->getCourseId()))
        {
            $this->bookableCoursesRepo->update($command);
            return;
        }
		$this->bookableCoursesRepo->store($command);
	}

}
