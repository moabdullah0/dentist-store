<!DOCTYPE html>
<html lang="ar" >
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
<body class="bg-light-500">
@include('pages.navbar')


<div class=" min-h-screen bg-center" dir="rtl">
<section class="h-100 gradient-custom">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">معلومات المنتج</h5>
                    </div>
                    <div class="card-body">
                        <!-- Single item -->
                        <div class="row">

                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <!-- Image -->
                                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">

                                    <img src="{{ asset('upload/' . $product->image) }}" width="100%" height="50%" alt="">
                                    <div class="flex">
                                        <img src="images/pro1.jpg" alt=""  width="40%" class="mt-3 mb-2 rounded-xl">
                                        <img src="images/pro1.jpg" alt=""  width="40%" class="mt-3 mx-2 mb-2 rounded-xl">

                                    </div>
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                    </a>
                                </div>
                                <!-- Image -->
                            </div>

                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                <p><strong>العنوان : {{$product->title}} </strong></p>
                                <p>الوصف : {{$product->descriprion}} </p>
                                <p>حالة التوفر : {{$product->status}} </p>


                                <!-- Price -->
                                <p class="mb-2 mt-2 ">
                                    <strong>السعر : ${{$product->price}}</strong>
                                    <br>
                                    <strong class="text-red-700"> الخصم : ${{$product->discount}}</strong>
                                </p>
                                <!-- Price -->
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                                        title="Remove item">
                                    <i class="fas fa-trash  text-blue-300"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                                        title="Move to the wish list">
                                    <i class="fas fa-heart text-red-300"></i>
                                </button>
                                <!-- Data -->
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <!-- Quantity -->
                                <div class="d-flex mb-4" style="max-width: 300px">
                                    <button class="btn btn-primary px-3 me-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="form-outline">
                                        <label class="form-label" for="form1">العدد</label>
                                        <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />

                                    </div>

                                    <button class="btn btn-primary px-3 ms-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                                <!-- Quantity -->


                            </div>
                            <a href="" class="btn bg-blue-300 text-black-300 hover:bg-blue-500 text-center w-56 addtocart"><i class="fa-solid fa-cart-shopping mx-2"></i>اضافة الى السلة</a>
                        </div>
                        <!-- Single item -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<script src="{{asset('js/index.js')}}"></script>
</body>
