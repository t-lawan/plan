<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Project;
use App\Task;
use App\Stage;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 1)->create();
        factory(Project::class,1)->create(
          [
            'user_id' => 1
          ]
        );
        factory(Task::class, 5)->create(
          [
            'user_id' => 1,
            'project_id' => 1
          ]
        );


    }
}
