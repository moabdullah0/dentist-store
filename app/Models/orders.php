<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $fillable=['id','title','discrition','image','user_id','status','payment_method','payment_status','payment_id','phone','address','email','total_price'];
    protected $table='orders';
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_detailes(){
        return $this->hasMany(ordersdetailes::class);
    }
}
