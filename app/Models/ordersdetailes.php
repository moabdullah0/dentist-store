<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersdetailes extends Model
{
    use HasFactory;
    protected $table='order_detailes';
    protected $fillable=['id','numofpeace','order_id','price','discount','total_price','product_id'];



    public function order(){
        return $this->belongsTo(orders::class);
    }


}
