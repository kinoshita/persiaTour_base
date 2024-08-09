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
                <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-10" method="post" action="{{ route('update.hotel.complete') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $hotels['id'] }}">
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            CITY:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                        </label>
                        <input type="hidden" name="city_name" value="{{ $hotels['city_name'] }}" />
                        <div class="block w-full sm:w-3/5 py-2 px-3 text-black  focus:outline-none focus:bg-white" id="city_name">
                            {{ $hotels['city_name'] }}
                        </div>
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="hotel_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Hotel Name:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                        </label>
                        <input type="hidden" name="hotel_name" value="{{ $hotels['hotel_name'] }}" />
                        <div class="block w-full sm:w-3/5  py-2 px-3 text-gray-700  focus:outline-none focus:bg-white"  id="hotel_name" >
                            {{ $hotels['hotel_name'] }}
                        </div>
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="address" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Address:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                        </label>
                        <input type="hidden" name="address" value="{{ $hotels['address'] }}" />
                        <div class="block w-full sm:w-3/5 py-2 px-3 text-gray-700  focus:outline-none focus:bg-white"  id="address">
                            {{ $hotels['address'] }}
                        </div>
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="tel" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Tel:<span class="p-1 ml-2 bg-red-500 text-gray-200 rounded">required</span>
                        </label>
                        <input type="hidden" name="tel" value="{{ $hotels['tel'] }}" />
                        <div class="block w-full sm:w-3/5  py-2 px-3 text-gray-700  focus:outline-none focus:bg-white"  id="tel">
                            {{ $hotels['tel'] }}
                        </div>
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="fax" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Fax:<span class="p-1 ml-2 bg-gray-500 text-gray-200 rounded">optional</span>
                        </label>
                        <input type="hidden" name="fax" value="{{ $hotels['fax'] }}" />
                        <div class="block w-full sm:w-3/5 py-2 px-3 text-gray-700  focus:outline-none focus:bg-white"  id="fax">
                            {{ $hotels['fax'] }}
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="button" class="bg-blue-700 text-white rounded-xl px-4 mx-2" onclick="history.back()">
                            Back
                        </button>
                        <button type="submit" class="bg-blue-700 text-white rounded-xl px-4 mx-2">
                            Setting
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
