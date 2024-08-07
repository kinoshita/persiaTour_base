<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
<section class="text-gray-600 w-full flex flex-col items-center px-2">
    <h1 class="text-3xl font-bold mt-10">Tour Information Settings</h1>

    <div class="w-full flex justify-center">
        <form class="shadow-md rounded-b-md bg-white w-full max-w-2xl p-2 my-6" method="get" action="{{ route('update.confirm.tour') }}">
            @csrf
            <input type="hidden" name="id" value="{{old('id',$tour->id)}}" />
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('tour_date'))
                        {{$errors->first('tour_date')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">

                <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    TOUR DATE:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="date" class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="tour_date" name="tour_date" value="{{old('tour_date',$tour->tour_date)}}"/>


            </div>
            <div>
                <span class="flex justify-center text-red-600">
                    @if($errors->has('reference_id'))
                        {{$errors->first('reference_id')}}
                    @endif
                </span>
            </div>
            <div class="flex sm:items-center mb-6 flex-col sm:flex-row">

                <label for="reference_id" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    REFERENCE ID:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input type="hidden" class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="reference_id" name="reference_id" value="{{old('id',$tour->id)}}"/>
                <div>
                    I-{{ str_pad($tour->id, 5, 0, STR_PAD_LEFT) }}
                </div>

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
                    <option value="{{$agent->short_name}}"  @if ($agent->short_name == $tour->agent) selected @endif>{{$agent->short_name}}</option>
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

                <label for="city_name" class="block sm:w-2/5 font-bold sm:text-right mb-1 pr-4">
                    TOUR NAME:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="tour_name" name="tour_name" value="{{old('tour_name',$tour->tour_name)}}"/>


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
                    <option value="series" @if($tour->series == 'series') selected @endif>series</option>
                    <option value="adhoc" @if($tour->series == 'adhoc') selected @endif>adhoc</option>
                </select>
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
                <select id="destination" name="destination">

                    @foreach($destinations as $dest):
                    <option value="{{$dest->destination}}">{{$dest->destination}}</option>
                    @endforeach
                </select>
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

                        <option value="{{$sit->situation}}" @if($tour->situation == $sit->situation) selected @endif>{{$sit->situation}}</option>
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
                    PAX:<span class="p-1 ml-2 bg-red-500 rounded text-gray-200">required</span>
                </label>
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="pax" name="pax" value="{{old('pax',$tour->pax)}}"/>
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
                <input class="block w-full sm:w-3/5 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" id="service" name="service" value="{{old('service',$tour->service)}}"/>
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
