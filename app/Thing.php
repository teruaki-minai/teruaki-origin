<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = ['content', 'user_id', "use"];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
