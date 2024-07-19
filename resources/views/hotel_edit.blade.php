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
            <input type="hidden" name="id" value="{{old('id',$hotel->id)}}" />
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('city_name'))
                        {{$errors->first('city_name')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">

                <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    CITY:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="city_name" name="city_name" value="{{old('city_name',$hotel->city)}}"/>


            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('hotel_name'))
                        {{$errors->first('hotel_name')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="hotel_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Hotel Name:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="hotel_name" name="hotel_name" value="{{$hotel->hotel_name}}" />
            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('address'))
                        {{$errors->first('address')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="address" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Address:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="address" name="address" value="{{old('address',$hotel->address)}}" />
            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('tel'))
                        {{$errors->first('tel')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="tel" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Tel:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="tel" name="tel" value="{{$hotel->tel}}" />
            </div>

            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="fax" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Fax:<span class="p-1 ml-2 bg-gray-500 text-gray-200 rounded">optional</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="fax" name="fax" value="{{$hotel->fax}}" />
            </div>
            <div class="flex justify-center">
                <button type="button" class="bg-blue-700 text-white rounded-xl px-4 mx-2" onClick="history.back()">
                    back
                </button>
                <button type="submit" class="bg-blue-700 text-white rounded-xl px-4 mx-2">
                    setting
                </button>
            </div>

        </form>
    </div>
</section>
</body>
</html>
