<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<section class="text-gray-600 w-full flex flex-col items-center px-2">
    <h1 class="text-3xl font-bold mt-10">Hotel Information Settings</h1>

    <div class="w-full flex justify-center">
        <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-2 " method="post" action="{{ route('hotel.update') }}">
            @csrf
            @if($errors->any())
            @endif
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    CITY:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="city_name" name="city_name" value="{{old('city_name',$hotel->city)}}"/>


            </div>
            <div class="flex sm:items-center justify-center mb-6 flex-col sm:flex-row">
                <span class="block sm:w-2/5 mb-1 pr-4">
                   @if($errors->has('city_name'))
                        <p class="text-red-600">{{$errors->first('city_name')}}</p>
                    @endif
                </span>

            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="hotel_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Hotel Name:<span class="p-1 ml-2 bg-red-500 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="hotel_name" name="hotel_name" value="{{$hotel->hotel_name}}" />
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="address" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Address:<span class="p-1 ml-2 bg-red-500 rounded">required</span>
                </label>

                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="address" name="address" value="{{$hotel->address}}" />
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="tel" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Tel:<span class="p-1 ml-2 bg-red-500 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="tel" name="tel" value="{{$hotel->tel}}" />
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="fax" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Fax:<span class="p-1 ml-2 bg-red-500 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="fax" name="fax" value="{{$hotel->fax}}" />
            </div>
            <div class="flex justify-center">
                <button type="button" class="bg-blue-700 text-white rounded-xl px-4" onClick="history.back()">
                    戻る
                </button>
                <button type="submit" class="bg-blue-700 text-white rounded-xl px-4">
                    設定
                </button>
            </div>

        </form>
    </div>
</section>
</body>
</html>
