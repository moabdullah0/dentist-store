<?php

namespace App\Models;

use App\Http\Controllers\product\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
    use HasFactory;
    protected $fillable=['id','company_discount','student_discount'];
    protected $table='discount';

    public function product(){
        return $this->hasMany(product::class);
    }
}
