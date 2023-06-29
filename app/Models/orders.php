<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\OrderConfirmationNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
class orders extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table='orders';
    protected $fillable=['id','title','name','descriprion','image','user_id','status','phone','address','email','total_price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderItems(){
        return $this->hasMany(ordersdetailes::class,'orders_id','id');
    }



    public function checkout()
    {
        // Perform checkout logic

        // Send notification to the user
        $user = $this->user;
        $user->notify(new OrderConfirmationNotification($this));
    }

}
