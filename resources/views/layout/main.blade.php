<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-800">
    @include('partials.navbar')

    <div class="container mx-auto my-5">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>