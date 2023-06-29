@extends('admin.index')
@section('content')
    </div>

<div class="mt-96">

    <div class="mt-5 ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="text-light bg-dark">حسم الطلاب</th>
                <th scope="col" class="text-light bg-dark">حسب الشركات</th>

            </tr>
            </thead>
            <tbody>
            <tr class="">
                @foreach($discount as $discount)
                    <th scope="row">{{$discount->company_discount}}</th>
                    <td>{{$discount->student_discount}}</td>


            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
