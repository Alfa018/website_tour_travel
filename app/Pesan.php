<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = ['name', 'departure', 'passenger', 'img', 'id_paket', 'id_user'];
    public function paket()
    {
        return $this->hasMany('App\Paket');
    }
}
