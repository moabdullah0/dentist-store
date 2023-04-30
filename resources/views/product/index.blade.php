@extends('admin.index')
@section('content')

    <div class="row">
        @foreach ($product as $product)
            <div class=" col-lg-6 grid grid-cols-4  w-50">
                <div class="card w-96 bg-base-100 shadow-xl">

                    <img src="{{ asset('upload/' . $product->image) }}" width="100%" height="50%" alt="">

                    <div class="card-body items-center text-center">
                        <h2 class="card-title"><span>{{$product->title}}</span></h2>
                        <p><span>{{$product->description}}</span></p>
                        <h3>السعر :<span class="text-green-600">{{$product->price}}</span></h3>
                        <h3>الخصم :<span class="text-danger">{{$product->discount}}</span></h3>
                        <h3>حالة التوفر :<span class="text-black-50">{{$product->status}}</span></h3>
                        <h3>الكمية :<span class="text-black-50">{{$product->numofpeace}}</span></h3>

                        <div class="card-actions">
                            <a href="{{url('/admin/edit-product/'.$product->id)}}" class="btn btn-primary">Edit</a>
                        </div>
                        <form action="{{url('/admin/delete-product/'.$product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>





@endsection
