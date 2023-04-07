<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersdetailes extends Model
{
    use HasFactory;
    protected $filltable=['id','numofpeace','order_id','price','discount','total_price'];
    protected $table='order_detailes';


    public function order(){
        return $this->belongsTo(orders::class);
    }


}
