@extends('admin.index')
@section('content')
    @vite('resources/css/app.css')

                <div class="row">
                   @forelse( $category as $categories)
                    <div class=" col-lg-4 grid grid-cols-4  w-50">
                        <div class="card w-96 bg-base-100 shadow-xl">

                            <img src="{{ asset('image/' . $categories->image) }}" width="100%" height="50%" alt="">

                            <div class="card-body items-center text-center">
                                <h2 class="card-title">{{$categories->title}}</h2>
                                <p>{{$categories->description}}</p>
                                <div class="card-actions">
                                    <a class="btn btn-primary" href="{{url('/admin/edit-category/'.$categories->id)}}">Edit</a>
                                    <form action="{{url('/admin/delete-category/'.$categories->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <tr>
                            <td>No REcord Found</td>
                        </tr>
                    @endforelse
                    </div>





@endsection
