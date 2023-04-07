@extends('admin.index')
@section('content')

    <!-- component -->
    <form action="{{url('/admin/update-category/'.$category->id)}}" method="POST"  enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="container">
            <form>
                <h2 class="mb-4">Edit Category {{ $category->title}}</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">عنوان القسم</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="title" value="{{$category->title}}">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">الوصف</label>
                            <input type="text" class="form-control" placeholder="" id="last" name="description" value="{{$category->description}}">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">الصورة التوصيفية</label>
                            <input type="file" name="image" id="image" class="form-control-file" value="{{ old('image', $category->image) }}">
                            <img src="{{ asset('image/' . $category->image) }}" width="90%" height="50%" alt="">
                        </div>


                    </div>
                    <!--  col-md-6   -->


                    <!--  row   -->


                </div>


                <button type="submit" class="btn btn-primary">
                    {{ __('update Category') }}
                </button>



            </form>

@endsection
