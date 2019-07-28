<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portofolio;

class Fitur extends Model
{
    protected $fillable = ['portofolio_id', 'name'];

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }
    
}
