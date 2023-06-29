<?php

namespace App\Models;

use App\Http\Controllers\product\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;
class Products extends Model implements Buyable
{
    use HasFactory;
    protected $fillable = [
        'title',
        'descriprion',
        'price',
        'discount',
        'brand_id',
        'category_id',
        'numofpeace',
        'status',
        'image', // remove 'image' from the $hidden array
    ];

    protected $table='product';

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brands(){
        return $this->belongsTo(brands::class);
    }
    public function discount(){
        return $this->hasMany(discount::class);
    }

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
        // TODO: Implement getBuyableIdentifier() method.
    }

    public function getBuyableDescription($options = null)
    {
        return $this->name;
        // TODO: Implement getBuyableDescription() method.
    }

    public function getBuyablePrice($options = null)
    {
        return $this->price;
        // TODO: Implement getBuyablePrice() method.
    }
}
