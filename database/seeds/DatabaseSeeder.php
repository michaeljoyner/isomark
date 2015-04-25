<?php

use App\Courses\Category;
use App\Courses\Course;
use App\Users\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laracasts\TestDummy\Factory as TestDummy;


class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('CourseCategorySeeder');
        $this->call('CourseTableSeeder');
        $this->call('WorkshopTableSeeder');
    }

}

class UserTableSeeder extends Seeder {


    public function run()
    {
        DB::table('users')->delete();
        TestDummy::create('App\Users\User', [
            'name' => 'Michael Joyner',
            'email' => 'joyner.michael@gmail.com'
        ]);
    }
}

class CourseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('courses')->delete();

        TestDummy::times(20)->create('App\Courses\Course');
    }
}

class CourseCategorySeeder extends Seeder {

    public function run()
    {
        DB::table('course_categories')->truncate();
        TestDummy::times(4)->create('App\Courses\Category');
    }
}

class WorkshopTableSeeder extends Seeder {

    public function run()
    {
        DB::table('workshops')->truncate();
        TestDummy::times(10)->create('App\Courses\Workshop');
    }
}