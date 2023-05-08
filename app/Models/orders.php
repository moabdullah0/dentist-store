<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=['id','title','name','descriprion','image','user_id','status','phone','address','email','total_price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_detailes(){
        return $this->hasMany(ordersdetailes::class);
    }
}
