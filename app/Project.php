<?php

namespace App;

use App\Model;
use App\Task;
use App\User;

class Project extends Model
{
    //
    protected $fillable = array('title', 'description');

    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function make(Task $task)
    {

        $this->tasks()->save($task);

    }
}
