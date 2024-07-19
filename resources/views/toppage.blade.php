<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persia Tour Data Page</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center mt-10 text-2xl">
    Tour List or Hotel List
</div>
<div class="flex justify-center border mx-24 mt-2 ">
    <span>
    This page is for creating tours and hotel lists within Persia Tours.<br>
    Please select the Create Tour or Create Hotel List page.
    </span>
</div>


<div class="flex justify-center">
    <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2 text-3xl" onclick="location.href='{{ route('tour.list') }}'">Tour List</button>
    <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2 text-3xl" onclick="location.href='{{ route('hotel.list') }}'">Hotel List</button>
</div>

</body>
</html>
