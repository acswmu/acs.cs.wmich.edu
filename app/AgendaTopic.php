<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendaTopic extends Model
{
  protected $fillable = [
    'topic', 
    'description', 
    'old_business', 
    'resolved', 
    'important', 
    'resolved_on',
  ];
}
