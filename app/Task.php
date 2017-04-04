<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function isCompleted()
    {
      return $query = App\Task::where('completed',1);
    }
}
