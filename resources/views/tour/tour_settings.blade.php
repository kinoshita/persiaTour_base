<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-full">
    <section class="text-gray-600 w-full flex flex-col items-center px-2 mb-4">
        <h1 class="text-3xl font-bold mt-10">Tour Information Settings</h1>
        <div class="w-full flex justify-center">
            <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-2 " method="get" action="{{ route('confirm.tour') }}">
                @csrf
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
                    <input type="date" required pattern="\d{4}-\d{2}-\d{2}" class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="tour_date" name="tour_date" value="{{old('tour_date')}}"/>
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
                    <select name="agent" id="agent">
                        @foreach($agents as $agent)
                        <option value="{{$agent->short_name}}">{{$agent->short_name}}</option>
                        @endforeach
                    </select>
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
                    <input type="text" required class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="tour_name" name="tour_name" placeholder="NTC Northen Iran" value="{{old('tour_name')}}"/>
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
                    <select name="series" id="series">
                        <option value="series">series</option>
                        <option value="adhoc">adhoc</option>
                    </select>
                </div>
                <div>
                    <span class="flex justify-center text-red-600">
                        @if($errors->has('destination'))
                            {{$errors->first('destination')}}
                        @endif
                    </span>
                </div>
                <div class="flex sm:items-center mb-2 flex-col sm:flex-row">
                    <label for="destination" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                        DESTINATION:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                    </label>
                    <!-- -->
                    <select id="destination" name="destination">
                        @foreach($destinations as $dest):
                        <option value="{{$dest->destination}}">{{$dest->destination}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="text-right text-blue-600 mb-2">
                        ※To add a destination, please contact your system administrator.
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
                    <select id="situation" name="situation">
                        @foreach($situations as $sit):
                            <option value="{{$sit->situation}}">{{$sit->situation}}</option>
                        @endforeach
                    </select>
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
                        PAX:<span class="p-1 ml-2 bg-gray-500 rounded text-gray-200">optional</span>
                    </label>
                    <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" placeholder="5" id="pax" name="pax" value="{{old('pax')}}"/>
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
                    <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="service" name="service" value=""/>
                </div>
                <div class="flex justify-center pb-2">
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
