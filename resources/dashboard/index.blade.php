<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="">
    <title>My Store</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{assert('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="bg-light-500 container">
@include('layoutes.navbar')
@include('layoutes.content')
@include('layoutes.footer')

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script defer src="{{asset('index.js')}}"></script>
</body>
