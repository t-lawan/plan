<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Project;
use App\Comment;
use App\Task;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
      return $this->hasMany(Project::class);
    }

    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function role()
    {
      return $this->hasOne(Role::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function make(Project $project)
    {

        $this->projects()->save($project);

    }
}
