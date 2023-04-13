<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="">
    <title>My Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="bg-light-500 container">


<div class=" bg-center fixed-top">
    <!-- component -->

    @include('pages.navbar')
</div>


<!--Landing-->


<section class="bg-gray-100 container mt-32" dir="">
<div class="row">
    @foreach ($products as $product)


        <figure class="snip1195 h-56">

            <div class="image">

                <img src="{{ asset('upload/' . $product->image) }}" width="100%" height="100%" alt="" class="img-fluid">
            </div>
            <div class="rating items-center text-center px-24">
                <i class="ion-ios-star text-center"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i>
            </div>
            <figcaption>
                <h1 >
                    {{$product->title}}
                </h1>
                <div class="price">
                    <s>{{$product->discount}}</s>${{$product->price}}
                    <br>

                    <!--Quantity-->
                    <div class="d-flex ">
                        <button class="btn btn-danger px-3 me-2 w-5 text-center"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>

                        <div class="form-outline mt-2">

                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />

                        </div>

                        <button class="btn btn-primary px-3 ms-2  w-5 "
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>

                    </div>
                    <!-- Quantity -->
                    <a href="{{url('/product-detailes/'.$product->id)}}" class="bg-blue-200 btn hover:bg-gray-50 w-32 h-2">عرض التفاصيل</a>
                </div>
            </figcaption>
            <a href="#" class="add-to-cart addtocart">Add to Cart</a>





        </figure>
    @endforeach
</div>
        </div>
</div>
</section>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script defer src="{{asset('js/index.js')}}"></script>

</body>
</html>
