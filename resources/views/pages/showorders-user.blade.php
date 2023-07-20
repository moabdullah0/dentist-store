<!DOCTYPE html>
<html lang="ar" dir="rtl">
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

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
               اسم المنتج
            </th>
            <th scope="col" class="px-6 py-3">
                العدد
            </th>
            <th scope="col" class="px-6 py-3">
                السعر قبل الحسم
            </th>
            <th scope="col" class="px-6 py-3">
                السعر بعد الحسم
            </th>
            <th scope="col" class="px-6 py-3">
                حالة الطلب
            </th>
            <th scope="col" class="px-6 py-3">
                تاريخ الطلب
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($order as $order)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{$order['product_name']}}
            </th>
            <td class="px-6 py-4">
                {{$order['quantity']}}
            </td>
            <td class="px-6 py-4">
                {{$order['total_price']}}
            </td>
            <td class="px-6 py-4">
                {{$order['price_after_discount']}}
            </td>
            <td class="px-6 py-4">
               {{$order['status']}}
            </td>
            <td class="px-6 py-4">
                {{$order['created_at']}}
            </td>
        </tr>
        @endforeach



        </tbody>
    </table>
</div>
</body>

</html>
