<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
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
}
