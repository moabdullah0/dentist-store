<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\city;
use Illuminate\Http\Request;

class addcityController extends Controller
{
    public function create(){
        $cities=city::all();
        return view('users.city',compact('cities'));
    }
    public function store(Request $request){
$city=new city();
        $city->city=$request->input('city');

        $city->save();
        return redirect('admin/add-city');
    }
}
