<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    <div class="container">
        <h1 class="text-center bg-blue-300 h-24 pt-5 font-semibold">سلة المفضلة</h1>

        @if (count($wishlistItems) > 0)
            <div class="row">
                @foreach ($wishlistItems as $item)
                    <div class="col-md-4 mb-4 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->product->title }}</h5>
                                <p class="card-text">Price: {{ $item->product->price }}</p>
                                <p class="card-text">Description: {{ $item->product->description }}</p>
                                {{-- Add other product details as needed --}}
                                <form action="{{ route('wishlist.remove', ['productId' => $item->product->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-black ">Remove from Wishlist</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No items found in the wishlist.</p>
        @endif
    </div>


</body>

</html>
