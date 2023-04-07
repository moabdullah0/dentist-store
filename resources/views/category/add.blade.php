@extends('admin.index')
@section('content')

    <!-- component -->
    <form action="{{url('/admin/add-category')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="container">
            <form>
                <h2 class="mb-4">اضافة قسم جديد</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">عنوان القسم</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="title">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">الوصف</label>
                            <input type="text" class="form-control" placeholder="" id="last" name="description">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">الصورة التوصيفية</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>


                    </div>
                    <!--  col-md-6   -->


                <!--  row   -->







        </div>


                <button type="submit" class="btn btn-primary">
                    {{ __('Add Category') }}
                </button>



            </form>

@endsection
