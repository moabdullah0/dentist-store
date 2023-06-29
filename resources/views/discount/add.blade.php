@extends('admin.index')
@section('content')

    <!-- component -->
    <form action="{{url('/admin/add-discount')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="container">
            <form>
                <h2 class="mb-4">اضافة حسم جديد</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first"> حسم الطلاب</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="student_discount">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">حسم الشركات</label>
                            <input type="text" class="form-control" placeholder="" id="last" name="company_discount">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>










                </div>


                <button type="submit" class="btn btn-primary">
                    {{ __('Add Discount') }}
                </button>



            </form>

@endsection
