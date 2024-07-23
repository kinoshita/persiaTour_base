<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<section class="text-gray-600 w-full flex flex-col items-center px-2">
    <h1 class="text-3xl font-bold mt-10">Tour Information Settings</h1>
    <div class="w-full flex justify-center">
        <div class="border-2  w-full mx-20 mt-20 text-center">
            <span>
                No Agent List found.<br>
Please set an Agent before proceeding to set Tour Information.
            </span>
        </div>
    </div>
    <div class="flex justify-center">
        <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2">Tour List</button>
        <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2" onclick="location.href='{{route('agent.index')}}'">Agent Settings</button>
    </div>
</section>
</body>
</html>
