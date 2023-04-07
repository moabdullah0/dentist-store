<?php

namespace App\Http\Controllers\product;
use App\Http\Requests\productsRequest;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\brands;
class product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $product=Products::all();
      return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=Products::all();
        $brands=brands::all();
        $category=Category::all();
        return view('product.add',compact('brands','category','product'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Products();

        $product->title=$request->input('title');
        $product->descriprion=$request->input('descriprion');
        $product->price=$request->input('price');
        $product->discount=$request->input('discount');
        $product->brand_id=$request->input('brand_id');
        $product->category_id=$request->input('category_id');
        $product->numofpeace=$request->input('numofpeace');
        $product->status=$request->input('status');

        // handle image upload
        if ($request->hasfile('image')) {
            $image= $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time()  .rand(11111, 99999). "." . $extension;
            $image->move(public_path('upload'), $filename);
            $product['image'] = $filename;

        }

        $product->save();
        return redirect('admin/show-product');
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
    public function edit($id)
    {
        $brands=brands::all();
        $category=Category::all();
        $product=Products::find($id);
        return view('product.edit',compact('product','brands','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Products::find($id);

        $product->title=$request->input('title');
        $product->descriprion=$request->input('descriprion');
        $product->price=$request->input('price');
        $product->discount=$request->input('discount');
        $product->brand_id=$request->input('brand_id');
        $product->category_id=$request->input('category_id');
        $product->numofpeace=$request->input('numofpeace');
        $product->status=$request->input('status');


        if ($request->hasfile('image')) {
            $image= $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time()  .rand(11111, 99999). "." . $extension;
            $image->move(public_path('upload'), $filename);
            $product['image'] = $filename;

        }

        $product->update();
        return redirect('admin/show-product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect('admin/show-product')->with('message','student deleted Sucssessfuly');
    }


}
