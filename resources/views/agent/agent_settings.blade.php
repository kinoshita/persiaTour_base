<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<section class="text-gray-600 w-full flex flex-col items-center px-2">
    <h1 class="text-3xl font-bold mt-10">Agent Information Settings</h1>

    <div class="w-full flex justify-center mt-2 ">
        <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-2 " method="get" action="{{ route('confirm.agent') }}">
            @csrf

            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center my-8 flex-col sm:flex-row">
                <label for="name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    AGENT NAME:<span class="p-1 ml-2 bg-gray-500 rounded text-gray-200">optional</span>
                </label>
                <input type="text" id="name" name="name" value="{{old('name')}}"/>

            </div>

            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('short_name'))
                        {{$errors->first('short_name')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="short_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    SHORT NAME:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="text" required id="short_name" name="short_name" value="{{old('short_name')}}"/>

            </div>

            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('remarks'))
                        {{$errors->first('remarks')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="remarks" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    REMARKS:<span class="p-1 ml-2 bg-gray-500 rounded text-gray-200">optional</span>
                </label>
                <input type="text" id="remarks" name="remarks" value="{{old('remarks')}}"/>

            </div>

            <div class="flex justify-center p-2">
                <button type="button" class="bg-blue-700 text-white text-2xl rounded-xl px-4 mx-2" onClick="history.back()">
                    back
                </button>
                <button type="submit" class="bg-blue-700 text-white text-2xl rounded-xl px-4 mx-2">
                    setting
                </button>
            </div>

        </form>
    </div>
</section>
</body>
</html>
