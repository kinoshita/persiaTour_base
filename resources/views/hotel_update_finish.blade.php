<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<section class="text-gray-600 w-full flex flex-col items-center px-2">
    <h1 class="text-3xl font-bold mt-10">Hotel Information Settings</h1>

    <div class="w-full h-96 flex justify-center">
        <div class="mt-6 pt-6  shadow-md rounded-b-md bg-white w-full max-w-2xl p-2" >
            update complete
        </div>
    </div>
    <div class="flex justify-center">
        <button type="button" class="bg-blue-700 text-white rounded-xl px-4 mx-2" onclick="location.href='{{route('admin.index')}}' ">
            Top
        </button>

        <button type="button" class="bg-blue-700 text-white rounded-xl px-4 mx-2" onclick="location.href='{{route('hotel.list')}}' ">
            Hotel Setting
        </button>
    </div>
</section>
</body>
</html>
