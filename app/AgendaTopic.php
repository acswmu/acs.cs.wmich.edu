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
    'user_id'
  ];

  protected $dates = [
    'created_at',
    'updated_at',
    'resolved_on'
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }
}
