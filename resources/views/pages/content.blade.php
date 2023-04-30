<!--Landing-->
<section dir="rtl" class="landing">
    <div class=" text-center  bg-gradient-to-r from-cyan-500 to-blue-500">
        <div class="row">
            <div class="col-lg-6 items-start mt-32 ">

                <h1 class="font-bold mt-56 mb-4 text-center mx-5 btn11">اهلاً وسهلا بك في المتجر الاول للتجهيزات السنية </h1>


                <div class='max-w-md mx-auto w-md-52 btn11'>
                    <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <input
                            class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                            type="text"
                            id="search"
                            placeholder="Search something.." />
                    </div>
                    <a href="/products" class="btn  bg-blue-200 mt-5 w-56 text-2xl hover:bg-blue-300 rounded-pill">فالنبدأ بالتسوق <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>

            <div class="col-lg-6 ">
                <img src="/images/dental-implants-surgery-concept-pen-tool-created-clipping-path-included-jpeg-easy-composite-removebg-preview.png" alt="" class="items-end mt-28 img-fluid" width="100%">

            </div>

            <img src="/images/16769082558719.png" alt="" width="100%" class="">
        </div>

    </div>

</section>



<!--الاقسام-->
<!--الاقسام-->


<section class="bg-gray-100 container ">

    <h1 class="text-center mb-3 font-extrabold text-xl mt-5">- dentist-</h1>

    <div class="row ">
        @foreach($category as $categories)

        <div class="col-lg-4 btn11 ">
            <div class="card w-96 bg-base-100 shadow-xl rounded-2xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('image/' . $categories->image) }}" alt="Shoes" class="rounded-xl show-pop " />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{$categories->title}}</h2>
                    <p>{{$categories->description}}</p>
                    <div class="card-actions">
                        <a href="{{url('/show-products/'.$categories->id)}}" class="btn btn-primary bg-blue-400">{{$categories->description}}</a>
                    </div>

                </div>

            </div>

        </div>
        @endforeach

    </div>
</section>




<section class=" " id="servecies" dir="rtl">
    <h1 class="text-center mb-3 font-extrabold text-xl mt-4 ">Services</h1>


    <div class="row">
        <div class="col-lg-6 btn11">
            <img src="/images/pro5.jpg" alt="" width="70%" class="text-center rounded-lg mx-20">
        </div>
        <div class="col-lg-6 fottext">
            <ul class="mt-32 mb-32 text-ellipsis">
                <li class="mb-2"><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>  امكانية التواصل مع الادارة بسهولة</li>
                <li><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>امكانية انشاء حساب بسهولة والوصول الى المتجر الذي تريد</li>
                <li><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>امكانية الطلب اونلاين</li>
                <li class=""><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>ماذا تنتظر ابدأ بالتصفح</li>
            </ul>
        </div>
    </div>
</section>
