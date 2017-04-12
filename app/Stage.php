<?php

namespace App;

use App\Model;
use App\Task;

class Stage extends Model
{
    //
    public function tasks()
    {
      return $this->hasMany(Task::class);
    }
}
