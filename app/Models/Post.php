<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'slug', 'user_id'];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
