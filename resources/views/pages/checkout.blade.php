<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="">
    <title>My Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light-500" dir="rtl">\
<div class=" bg-center fixed-top">

    <!-- component -->

    @include('pages.navbar')

        <style>
            * {
                margin: 0;
                padding: 0;
            }
            fieldset label span {
                min-width: 125px;
            }
            fieldset .select::after {
                content: '';
                position: absolute;
                width: 9px;
                height: 5px;
                right: 20px;
                top: 50%;
                margin-top: -2px;
                background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='9' height='5' viewBox='0 0 9 5'><title>Arrow</title><path d='M.552 0H8.45c.58 0 .723.359.324.795L5.228 4.672a.97.97 0 0 1-1.454 0L.228.795C-.174.355-.031 0 .552 0z' fill='%23CFD7DF' fill-rule='evenodd'/></svg>");
                pointer-events: none;
            }
        </style>


    <div class="h-screen grid grid-cols-3">

        <div class="lg:col-span-2 col-span-3 bg-indigo-50 space-y-8 px-12">
            <div class="mt-8 p-4 relative flex flex-col sm:flex-row sm:items-center bg-white shadow rounded-md">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div class="text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-5 h-6 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-sm font-medium font-weight-bold ml-3">الدفع</div>
                </div>

            </div>
            <div class="rounded-md">
                <form action="{{url('/checkout-save')}}" id="payment-form" method="POST" action="">
                    @csrf
                    <section>
                        @if(session('error'))
                            <div class="bg-red-500 w-96 h-12 text-start rounded-pill text-center text-white">{{session('error')}}</div>
                        @endif
                        <h2 class="uppercase tracking-wide text-lg font-semibold text-gray-700 my-2">المعلومات الشخصية</h2>
                        <fieldset class="mb-3 bg-white shadow-lg rounded text-gray-600">
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">الاسم</span>
                                <input name="name" class="focus:outline-none px-3" placeholder="Try Odinsson" required="" value="{{$user->name}}">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center hidden">

                                <input type="hidden" name="user_id" class="focus:outline-none px-3" placeholder="Try Odinsson" required="" value="{{$user->id}}">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">الايميل</span>
                                <input name="email" type="email" class="focus:outline-none px-3" placeholder="try@example.com" required="" value="{{$user->email}}">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">العنوان</span>
                                <input name="address" class="focus:outline-none px-3" placeholder="العنوان بالتفصيل" value="{{$user->city_id}}">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">المحافظة</span>
                                <input name="city_id" class="focus:outline-none px-3" placeholder="ادلب" vlaue="{{$user->city_id}}">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">رقم الهاتف</span>
                                <input name="phone" class="focus:outline-none px-3" placeholder="8523432443" value="{{$user->phone}}">
                            </label>
                            <label class="inline-flex w-2/4 border-gray-200 py-3">
                                <span class="text-right px-2">State</span>
                                <input name="status" class="focus:outline-none px-3" placeholder="CA" value="{{$user->status}}">
                            </label>
                            @foreach($cartItems as $cart)
                            <label class="inline-flex w-2/4 border-gray-200 py-3 hidden">
                                <span class="text-right px-2">State</span>
                                <input class="text-gray-600 text-md font-semi-bold hidden" type="hidden" name="product_id" >{{$cart->id}}</input>
                            </label>
                            @endforeach
                            <label class="flex border-t border-gray-200 h-12 py-3 items-center select relative">
                                <span class="text-right px-2">Country</span>
                                <div id="country" class="focus:outline-none px-3 w-full flex items-center">
                                    <select name="country" class="border-none bg-transparent flex-1 cursor-pointer appearance-none focus:outline-none">
                                        <option value="AU">Australia</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BR">Brazil</option>
                                        <option value="CA">Canada</option>
                                        <option value="CN">China</option>
                                        <option value="DK">Denmark</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IT">Italy</option>
                                        <option value="JP">Japan</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MX">Mexico</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="SG">Singapore</option>
                                        <option value="ES">Spain</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US" selected="selected">United States</option>
                                    </select>
                                </div>
                            </label>
                        </fieldset>
                    </section>

            </div>

            <button class="submit-button px-4 py-3 rounded-full bg-blue-400 text-white focus:ring focus:outline-none w-full text-xl font-semibold transition-colors">
                ${{ Cart::subtotal()}}
            </button>
        </div>
        <div class="col-span-1 bg-white lg:block hidden">
            <h1 class="py-6 border-b-2 text-xl text-gray-600 px-8">تفاصيل الطلب</h1>
            <ul class="py-6 border-b space-y-6 px-8">
                @foreach($cartItems as $cart)
                <li class="grid grid-cols-6 gap-2 border-b-1">


                    <div class="flex flex-col col-span-3 pt-2">
                        <span class="text-gray-400 font-bold">المنتج : </span>
                        <input class="text-gray-600 text-md font-semi-bold">{{$cart->name}}  &#x2717 {{ $cart->qty }}</input>


                    </div>

                    <div class="col-span-2 pt-3">
                        <div class=" items-center space-x-2 text-sm justify-between">
                            <span class="text-gray-400 font-bold">السعر : </span>
                            <input class="text-blue-400 font-semibold inline-block">${{ $cart->price }}</input>

                        </div>
                    </div>
                </li>
                @endforeach
                </form>
            </ul>

            <div class="font-semibold text-xl px-8 flex justify-between py-8 text-gray-600">
                <span>Total</span>
                <span>${{ Cart::subtotal()}}</span>
            </div>
        </div>
    </div>


<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
