<?php namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\UserWasRegistered;
use App\Handlers\Events\NotifyRegisteredUser;
use App\Events\PasswordWasChanged;
use App\Handlers\Events\UsersNotifier;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [
			'EventListener',
		],

        UserWasRegistered::class => [
            NotifyRegisteredUser::class,
        ],

        PasswordWasChanged::class => [
            UsersNotifier::class,
        ],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
