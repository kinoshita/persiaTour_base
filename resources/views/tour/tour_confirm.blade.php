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
        <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-2 " method="post" action="{{ route('complete.tour') }}">
            @csrf

            <div class="flex justify-center font-bold text-xl">
                <br>
                This will be used to set the tour information. <br>
                <br>
            </div>


            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('tour_date'))
                        {{$errors->first('tour_date')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">

                <label for="tour_date" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    TOUR DATE:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="tour_date" name="tour_date" value="{{$all['tour_date']}}"/>
                {{$all['tour_date']}}

            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('agent'))
                        {{$errors->first('agent')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="agent" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    AGENT:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="agent" name="agent" value="{{$all['agent']}}"/>
                {{$all['agent']}}
            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('tour_name'))
                        {{$errors->first('tour_name')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">

                <label for="tour_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    TOUR NAME:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="tour_name" name="tour_name" value="{{$all['tour_name']}}"/>
                {{$all['tour_name']}}
            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('series'))
                        {{$errors->first('series')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="series" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    Series/Adhoc:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="series" name="series" value="{{$all['series']}}"/>
                {{$all['series']}}
            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('destination'))
                        {{$errors->first('destination')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="destination" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    DESTINATION:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <!-- -->
                <input type="hidden" id="destination" name="destination" value="{{$all['destination']}}"/>
                {{$all['destination']}}
            </div>

            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('situation'))
                        {{$errors->first('situation')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="situation" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    SITUATION:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="situation" name="situation" value="{{$all['situation']}}"/>
                {{$all['situation']}}
            </div>
            <!-- -->
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('pax'))
                        {{$errors->first('pax')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="pax" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    PAX:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" id="pax" name="pax" value="{{$all['pax']}}"/>
                {{$all['pax']}}
            </div>
            <!-- -->
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('service'))
                        {{$errors->first('service')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                <label for="service" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    SERVICE:<span class="p-1 ml-2 bg-gray-500 rounded text-gray-200">optional</span>
                </label>
                <input type="hidden" id="service" name="service" value="{{$all['service']}}"/>
                {{$all['service']}}
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
