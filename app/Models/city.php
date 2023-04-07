<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $filltable=['id','city'];
    protected $table='city';

    public function users()
    {
       return $this->hasMany(User::class);
    }
}
