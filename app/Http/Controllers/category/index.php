<?php

namespace App\Http\Controllers\category;
use App\Http\Requests\categoryRequest;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class index extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$category=Category::all();
return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('category.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = new Category;
        $category->title = $request->input('title');
        $category->description = $request->input('description');

        // handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/upload'), $filename);
            $category->image = $filename;
        }

      Category::create($category);

        return redirect('admin/show-category');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
