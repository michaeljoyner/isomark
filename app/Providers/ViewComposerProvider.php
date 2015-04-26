<?php namespace App\Providers;

use App\Courses\Category;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(Guard $auth)
	{

		view()->composer('partials.navbar', function($view) use ($auth) {
            if($auth->user())
            {
                $canCreateUser = $auth->user()->can_create_user;
            }
            else {
                $canCreateUser = false;
            }

            $categoryList = $this->getCourseCategoyList();
           $view->with(compact('categoryList', 'canCreateUser'));
        });

        view()->composer('admin.partials.coursesform', function($view)
        {
            $categoryList = $this->getCourseCategoyList();
            $view->with(compact('categoryList'));
        });

        view()->composer('front.partials.navbar', function($view)
        {
            $categoryList = $this->getCategoryListWithSlug();
            $view->with(compact('categoryList'));
        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    /**
     * @return mixed
     */
    private function getCourseCategoyList()
    {
        $categoryList = Category::lists('name', 'id');
        return $categoryList;
    }

    private function getCategoryListWithSlug()
    {
        return Category::lists('name', 'slug');
    }

}
