@extends('admin.index')
@section('content')
    <form action="{{url('admin/add-city')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="container">
            <form>
                <h2 class="mb-4">اضافة مدينة جديد</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first"> اسم المدينة</label>
                            <input type="text" class="form-control" placeholder="" id="first" name="city">
                        </div>
                    </div>
                    <!--  col-md-6   -->


                    <!--  col-md-6   -->


                    <!--  row   -->










                <button type="submit" class="btn btn-primary">
                    {{ __('Add city') }}
                </button>



            </form>

@endsection
