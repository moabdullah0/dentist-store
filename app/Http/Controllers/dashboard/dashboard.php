<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\ordersdetailes;
use App\Models\User;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('admin.index');
    }

    public function showorders(Request $request)
    {
        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');

        $orders = orders::whereDay('created_at', $day)
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();

        // Group orders by user ID
        $ordersByUser = $orders->groupBy('user_id');

        return view('orders.showorders', compact('ordersByUser'));
    }



    public function sailesfilter(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');
        $orders = orders::whereMonth('created_at', $month)->whereYear('created_at', $year)->get();

        $totalSales = $orders->sum('total_price');

        return view('pages.filtersail', compact('orders', 'totalSales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */





public function navbaruser($userId){
    $user=Auth::user();
    return view('pages.navbar',compact('user'));
}
    public function show(Request $request,$userId)
    {
        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');

        $orders = orders::whereDay('created_at', $day)
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();

        // Group orders by user ID
        $ordersByUser = $orders->groupBy('user_id');





        return view('orders.detailes', compact('orders','ordersByUser'));
    }


    /**

     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
