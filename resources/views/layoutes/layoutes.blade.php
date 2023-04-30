<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousl.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="">
    <title>My Store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>
</head>
</head>
<body class="bg-light-500 ">



<div class=" bg-center fixed-top">
    <!-- component -->

   @include('pages.navbar')
</div>








<!--Landing-->
@include('pages.content')

    <!--<footer>
        <div class="bh-black">
            <div class="row">
                <div class="col-lg-4">
                    <ul>
                        <li>FaceBook</li>
                        <li>Telegram</li>
                        <li>WhatsApp</li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>-->

    <div class=" my-2">
      @include('pages.footer')
    </div>
    <!-- End of .container -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script defer src="{{asset('js/index.js')}}"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>

    ScrollReveal().reveal('.ss33,.ss22,.ss11', { delay: 150 ,origin:'left' });
    ScrollReveal().reveal('.imgst1,', { delay: 150 ,origin:'bottom' });
    ScrollReveal().reveal('.btn11,.btn22,.btn33', { delay: 150 ,origin:'top' });
    ScrollReveal().reveal('.fotimg', { delay: 200 ,origin:'right' });
    ScrollReveal().reveal('.fottext', { delay: 600 ,origin:'right' });
    ScrollReveal().reveal('.fottext1', { delay: 400 ,origin:'top' });
</script>
</body>
</html>
