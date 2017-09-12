<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'content', 'password'];

    public function setPasswordAttribute($value)
    {
        if ($value == '') {
            return 0;
        }
        $this->attributes['password'] = bcrypt($value);
    }
}
