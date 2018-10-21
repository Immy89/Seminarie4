<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'commentId';

    public function user() {
        return $this->belongsTo('App\User', 'userId');
    }

}
