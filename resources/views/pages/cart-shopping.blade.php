<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="">
    <title>My Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light-500">\
<div class=" bg-center fixed-top">

    <!-- component -->

    @include('pages.navbar')
</div>

<div class="h-screen bg-gray-300 mt-5">
    <div class="py-12">


        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">

                    <div class="md:grid md:grid-cols-3 gap-2 ">

                        <div class="col-span-2 p-5">

                            <h1 class="text-xl font-medium ">Shopping Cart</h1>
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success |{{Session::get('success_message')}}</strong>
                                </div>
                            @endif
                            @php

                            @endphp

                        @foreach($cartItems as $cart)
                            <div class="flex justify-between items-center mt-6 pt-6">

                                <div class="flex  items-center">

                                    <img src="{{$cart->image}}">
                                    <div class="flex flex-col ml-3">
                                        <span class="md:text-md font-medium">{{$cart->name}}</span>
                                        <span class="text-xs font-light text-gray-400">{{$cart->description}}</span>

                                    </div>


                                </div>

                                <div class="flex justify-center items-center">

                                    <div class="pr-8 flex ">

                                        <form action="{{ route('cart.edit', $cart->rowId,$cart->qty) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="number" name="quantity" value="{{ $cart->qty }}">
                                            <button type="submit">Update</button>
                                        </form>

                                    </div>

                                    <div class="pr-8 ">

                                        <span class="text-xs font-medium">{{$cart->price }} $</span>
                                    </div>
                                    <div>
                                        <form action="{{ route('cart.remove', $cart->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn "> <i class="fas fa-trash  text-blue-300"></i></button>
                                        </form>
                                    </div>

                                </div>
                                <div>




                                </div>
                            </div>

@endforeach









<div class="flex justify-between items-center mt-6 pt-6 border-t">
    <a href="/">
                                <div class="flex items-center">
                                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                                   <span class="text-md  font-medium text-blue-500">Continue Shopping</span>
                                </div>
    </a>
                                <div class="flex justify-center items-end">

                                    <span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span>
                                    <span class="text-lg font-bold text-gray-800 "> ${{ Cart::subtotal()}}</span>



                                </div>
    <a href="/checkout" class="btn btn-primary text-center">Checkout</a>

    </div>

                        </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
