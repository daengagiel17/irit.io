<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use UserActivities;

    protected $fillable = ['name', 'testimoni', 'position', 'photo'];
}
