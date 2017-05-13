<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;
use App\User;

class Comment extends Model
{
    //
    protected $fillable = array('body','user_id','task_id');

    public function task()
    {
      return $this->belongsTo(Task::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
