<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
            <img class="h-12 w-12" src="/image/ayam.jpg" alt="Chit Chat logo">
        </div>
        <div>
            <div class="text-xl font-medium text-black"> Chitchat</div>
            <p class="text-gray-500"> yout have a new message</p>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>