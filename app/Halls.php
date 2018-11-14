<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halls extends Model
{
  public function positions()
  {
    return $this->belongsTo('App\Positions');
  }
  public function statuses()
  {
    return $this->belongsTo('App\Statuses');
  }
}
