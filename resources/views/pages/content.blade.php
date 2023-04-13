<section >
    <div class=" text-center  bg-blue-500">
        <div class="row">
            <div class="col-lg-6 items-start">
                <h1 class="font-bold mt-56 mb-4 text-left mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam ad quidem, voluptas debitis qui vitae maxime quaerat quibusdam corrupti. Praesentium vero vitae, odit nisi, quaerat dolor nemo eum commodi omnis similique magnam fugiat rerum corrupti laborum laboriosam ut distinctio aspernatur earum cum? Eos dolorem repellendus rem mollitia vitae modi impedit. </h1>


                <div class='max-w-md mx-auto w-md-52'>
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
                    <a href="" class="btn bg-blue-300 rounded-md hover:bg-white mt-5 rounded-pill ">Lets Go To shop</a>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{asset('/images/dental-implants-surgery-concept-pen-tool-created-clipping-path-included-jpeg-easy-composite-removebg-preview.png')}}" alt="" class="items-end mt-28 " width="100%">

            </div>

            <img src="/images/16769082558719.png" alt="" width="50%">
        </div>

    </div>

</section>

<!--الاقسام-->


<section class="bg-gray-100  " dir="rtl">

    <div class="flex flex-wrap">
        @foreach($category as $categories)
            <div class="col-lg-4 col-sm-2 px-2 mt-5">
                <div  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img src="{{ asset('image/' . $categories->image) }}" width="100%" height="50%" alt="" class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg image" >
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$categories->title}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$categories->description}}</p>
                        <a href="{{url('/show-products/'.$categories->id)}}" class="btn btn-primary bg-blue-400">{{$categories->description}}</a>
                    </div>
                </div>


            </div>
        @endforeach
    </div>


</section>

<section class=" " id="servecies">
    <h1 class="text-center mb-3 font-extrabold text-xl mt-4 ">Services</h1>


    <div class="row">
        <div class="col-lg-6">
            <img src="/images/pro5.jpg" alt="" width="70%" class="text-center rounded-lg mx-20">
        </div>
        <div class="col-lg-6">
            <ul class="mt-32 mb-32 text-ellipsis">
                <li class="mb-2"><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>  امكانية التواصل مع الادارة بسهولة</li>
                <li><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>امكانية انشاء حساب بسهولة والوصول الى المتجر الذي تريد</li>
                <li><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>امكانية الطلب اونلاين</li>
                <li class=""><i class="fa-solid fa-check-double text-blue-400 mx-2 mb-3"></i>ماذا تنتظر ابدأ بالتصفح</li>
            </ul>
        </div>
    </div>
</section>
