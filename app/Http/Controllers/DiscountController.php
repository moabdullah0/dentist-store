<?php

namespace App\Http\Controllers;

use App\Models\discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount=discount::all();
        return view('discount.add',compact('discount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discount=discount::all();
        return view('discount.show',compact('discount'));
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request){
        $discount=new discount();
            $discount->company_discount=$request->input('company_discount');
            $discount->student_discount=$request->input('student_discount');

        $discount->save();
        return redirect('admin/add-discount');
    }


    /**
     * Display the specified resource.
     */
    public function show(discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(discount $discount)
    {
        //
    }
}
