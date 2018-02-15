<?php

namespace CodeNation;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('CodeNation\User', 'user_id');
    }
}
