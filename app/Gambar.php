<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portofolio;

class Gambar extends Model
{
    protected $fillable = ['portofolio_id', 'url'];

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }

}
