<!--Landing-->
<div class="home mt-32" id="home" dir="rtl">
    <div class="container">

        <div class="row d-flex items-center">
            <div class="col-6 mt-32 ">
                <h1 class="mb-3 font-weight-bold"><span class="font-bold text-xl">{{$user->name}}</span> اهلاً بك</h1>
                <h2>هذا الموقع يساعدك على الوصول الى جميع ادوات التي تخص عبادة طب الاسنان من معدات واجهزة تخص العيادة والطالب الجامعي</h2>
                    <a href="/products" class="btn btn bg-blue-500 mt-5 rounded-pill">ابدا التسوق من هنا</a>
            </div>
            <div class="col-6 colmeimg  ">
                <img src="images/dental-implants-surgery-concept-pen-tool-created-clipping-path-included-jpeg-easy-composite-removebg-preview.png" alt="" class="img-fluid img1  ">
            </div>
        </div>

    </div>
</div>



<!--الاقسام-->
<!--الاقسام-->


<section class=" container items-center">

    <h1 class="text-center mb-3 font-extrabold text-xl mt-5">- dentist-</h1>

    <div class="row">
        @foreach($category as $categories)

        <div class="col-lg-4 btn11 cardsection">
            <div class="card w-96 bg-base-100 shadow-xl rounded-2xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('image/' . $categories->image) }}" alt="Shoes" class="rounded-xl show-pop " />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{$categories->title}}</h2>
                    <p>{{$categories->description}}</p>
                    <div class="card-actions">
                        <a href="{{url('/show-products/'.$categories->id)}}" class="btn btn-primary bg-blue-600 rounded-pill hover:bg-blue-300 text-center">{{$categories->description}}</a>
                    </div>

                </div>

            </div>

        </div>
        @endforeach

    </div>
</section>




<section class=" bg-gray-100" id="servecies" dir="rtl">
    <h1 class="text-center mb-3 font-extrabold text-xl mt-5 ">خدماتنا</h1>


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
