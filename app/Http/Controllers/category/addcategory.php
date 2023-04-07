<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
class addcategory extends Controller
{
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


        $category=new Category();

        $category->title=$request->input('title');
        $category->description=$request->input('description');

        // handle image upload
        if ($request->hasfile('image')) {
            $image= $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time()  .rand(11111, 99999). "." . $extension;
            $image->move(public_path('image'), $filename);
            $category['image'] = $filename;
        }

        $category->save();
      // insert(new Category(),$category);
//Category::create($category);
        return redirect('admin/show-category');
    }
    public function edit( $id)
    {
$category=Category::find($id);

        return view('category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $categories=Category::find($id);

        $categories->title=$request->input('title');
        $categories->description=$request->input('description');


        if ($request->hasfile('image')) {
            $image= $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time()  .rand(11111, 99999). "." . $extension;
            $image->move(public_path('image'), $filename);
            $categories['image'] = $filename;
        }

        $categories->update();
        return redirect('admin/show-category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/show-category')->with('message','student deleted Sucssessfuly');
    }


}
