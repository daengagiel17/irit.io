<?php

namespace App;
use App\Gambar;
use App\Fitur;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use UserActivities;

    protected $fillable = ['title', 'description', 'link', 'type', 'gif', 'image', 'client', 'waktu_pengerjaan'];


    public function gambar()
    {
        return $this->hasMany(Gambar::class);
    }

    public function fitur()
    {
        return $this->hasMany(Fitur::class);
    }

}
