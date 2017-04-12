<?php

namespace App;

use App\Model;
use App\User;

class Role extends Model
{
    //
    public function users()
    {
      return $this->hasMany(User::class);
    }
}
