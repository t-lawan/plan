<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Project;
use App\Task;
use App\Stage;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = array('users','projects','tasks','comments');
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        foreach ($this->toTruncate as $table)
        {
          DB::table($table)->truncate();
        }

        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(CommentsTableSeeder::class);


    }
}
