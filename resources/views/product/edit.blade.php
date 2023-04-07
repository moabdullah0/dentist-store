@extends('admin.index')
@section('content')

    <!-- component -->
    <form action="{{url('/admin/update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="container">
            <form>
                <h2 class="mb-4">تعديل منتج </h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">عنوان المنتج</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="title" value="{{$product->title}}">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">الوصف</label>
                            <input type="text" class="form-control" placeholder="" id="last" name="descriprion" value="{{$product->descriprion}}">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">السعر</label>
                        <input type="text" class="form-control" placeholder="" id="last" name="price" value="{{$product->price}}">
                    </div>
                </div>
                <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">الخصم</label>
                <input type="text" class="form-control" placeholder="" id="last" name="discount" value="{{$product->discount}}">
            </div>
        </div>
        <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">الكمية المتوفرة</label>
                <input type="text" class="form-control" placeholder="" id="last" name="numofpeace" value="{{$product->numofpeace}}">
            </div>
        </div>
        <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">حالة التوفر</label>
                <input type="text" class="form-control" placeholder="" id="last" name="status" value="{{$product->status}}">
            </div>
        </div>
        <!--  col-md-6   -->
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="last">الماركة</label>
                <select class="form-select" aria-label="Default select example" name="brand_id" id="brand_id">
                    <option value="{{$product->brand}}">الماركة</option>
                    @forelse ($brands as $brand)

                        <option value="{{$brand->id}}">{{$brand->brand}}</option>
                    @empty
                        <tr>
                            <td>No REcord Found</td>
                        </tr>
                    @endforelse
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">القسم</label>
                <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                    <option value="">القسم</option>
                    @forelse ($category as $category)

                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @empty
                        <tr>
                            <td>No REcord Found</td>
                        </tr>
                    @endforelse
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company">الصورة التوصيفية</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($product->image)
                        <img src="{{ asset('upload/' . $product->image) }}" alt="{{$product->image}}" width="200">

                    @endif
                </div>


            </div>
            <!--  col-md-6   -->


            <!--  row   -->







        </div>


        <button type="submit" class="btn btn-primary">
            {{ __('Add product') }}
        </button>



    </form>

@endsection
