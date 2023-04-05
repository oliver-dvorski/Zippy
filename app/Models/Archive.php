<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $hidden = ['password'];
    protected $fillable = ['url', 'filename', 'password'];
}
