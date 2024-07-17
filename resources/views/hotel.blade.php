<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-50">
        <section class="text-gray-600 w-full flex flex-col items-center px-2">
            <h1 class="text-3xl font-bold mt-10">Hotel Information Settings</h1>
            <p>

            </p>
            <div class="">
                <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-10" method="post" action="{{ route('hotel.settings') }}">
                    @csrf
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            CITY
                        </label>
                        <input class="block w-full sm:w-3/5 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="city_name" name="city_name" value=""/>
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="hotel_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Hotel Name
                        </label>
                        <input class="block w-full sm:w-3/5 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="hotel_name" name="hotel_name" value="" />
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="address" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Address
                        </label>
                        <input class="block w-full sm:w-3/5 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="address" name="address" value="" />
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="tel" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Tel
                        </label>
                        <input class="block w-full sm:w-3/5 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="tel" name="tel" value="" />
                    </div>
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label for="fax" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                            Fax
                        </label>
                        <input class="block w-full sm:w-3/5 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"  id="fax" name="fax" value="" />
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-700 text-white rounded-xl px-4">
                            設定
                        </button>
                    </div>

                </form>
            </div>
        </section>
    </body>
</html>
