<?php

namespace App;

use App\Model;
use App\Project;
use App\Stage;
use App\User;
use App\Rating;


class Task extends Model
{
    //
    protected $fillable = array('title', 'body');

    public function project()
    {
      return $this->belongsTo(Project::class);
    }

    public function stage()
    {
      return $this->belongsTo(Stage::class);
    }
    public function rating()
    {
      return $this->belongsTo(Rating::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
