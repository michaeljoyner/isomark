<?php

use App\Courses\Category;
use App\Courses\Course;
use App\Users\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


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
        $this->call('CourseTableSeeder');
        $this->call('CourseCategorySeeder');
    }

}

class UserTableSeeder extends Seeder {


    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name'            => 'Michael Joyner',
            'email'           => 'joyner.michael@gmail.com',
            'can_create_user' => true,
            'password'        => bcrypt('password123'),
        ]);
        User::create([
            'name'            => 'Carol Yeh',
            'email'           => 'carol@example.com',
            'can_create_user' => true,
            'password'        => bcrypt('password123'),
        ]);
        User::create([
            'name'            => 'Sam Joyner',
            'email'           => 'sam@example.com',
            'can_create_user' => false,
            'password'        => bcrypt('password123'),
        ]);
    }
}

class CourseTableSeeder extends Seeder {

    public function run()
    {
        $catIds = [1, 2, 3, 4, 5, 6];
        $faker = \Faker\Factory::create();
        DB::table('courses')->delete();
        foreach (range(1, 20) as $index) {
            $name = $faker->unique()->bs;
            Course::create([
                'course_category_id'       => $faker->randomElement($catIds),
                'name'              => $name,
                'slug'              => Str::slug($name),
                'usid'              => $faker->randomNumber(6),
                'aim'               => $faker->paragraph(),
                'certification'     => $faker->sentence(),
                'description'       => $faker->paragraph(10),
                'people_per_course' => $faker->randomNumber(2),
                'duration'          => $faker->randomDigit . ' days',
                'venue'             => $faker->city,
                'fee'               => $faker->randomFloat(2, 20, 1000)
            ]);
        }
    }
}

class CourseCategorySeeder extends Seeder {

    public function run()
    {
        DB::table('course_categories')->truncate();
        Category::create([
            'name' => 'NEBOSH',
            'slug' => 'nebosh',
        ]);
        Category::create([
            'name' => 'first aid',
            'slug' => 'first-aid',
        ]);
        Category::create([
            'name' => 'fire fighting',
            'slug' => 'fire-fighting',
        ]);
        Category::create([
            'name' => 'environment',
            'slug' => 'environment',
        ]);
        Category::create([
            'name' => 'vehicle',
            'slug' => 'vehicle',
        ]);
        Category::create([
            'name' => 'hazards',
            'slug' => 'hazards',
        ]);
    }
}