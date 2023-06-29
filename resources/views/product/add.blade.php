@extends('admin.index')
@section('content')

    <!-- component -->
    <form action="{{url('/admin/add-product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <form>
                <h2 class="mb-4">اضافة منتج جديد</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">عنوان المنتج</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="title">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">الوصف</label>
                            <input type="text" class="form-control" placeholder="" id="last" name="descriprion">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">السعر</label>
                        <input type="text" class="form-control" placeholder="" id="last" name="price">
                    </div>
                </div>
                <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last" class="font-weight-bold ">الحسم</label>
<br>
                    @forelse ($discount as $discount)
                        <label for="last">حسم الشركات</label>
                        <input type="text" id="checkbox" name="discount_company" checked value="{{$discount->company_discount}}">
                    <label for="last">حسم الطلاب</label>
                    <input type="text" id="checkbox" name="discount_student" checked value="{{$discount->student_discount}}">
                    @empty
                        <tr>
                            <td>No REcord Found</td>
                        </tr>
                    @endforelse

            </div>
        </div>
        <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">الكمية المتوفرة</label>
                <input type="text" class="form-control" placeholder="" id="last" name="numofpeace">
            </div>
        </div>
        <!--  col-md-6   -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last">حالة التوفر</label>
                <input type="text" class="form-control" placeholder="" id="last" name="status">
            </div>
        </div>
        <!--  col-md-6   -->
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="last">الماركة</label>
                <select class="form-select" aria-label="Default select example" name="brand_id" id="brand_id">
                    <option value="">الماركة</option>
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
                            <input id="image" class="block mt-1 w-full inp px-3  let username btn" type="file" name="image"  required autofocus autocomplete="username" />
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
