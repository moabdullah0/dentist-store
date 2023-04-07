<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;
use mysql_xdevapi\Table;

class brands extends Model
{
    use HasFactory;
    protected $table='brands';
protected $fillable=['id','brand'];

public function products(){
    return $this->hasMany(\App\Models\products::class);
}
}
