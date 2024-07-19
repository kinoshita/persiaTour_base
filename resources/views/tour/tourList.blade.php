<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Tour List</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>

</div>
<div class="flex justify-center mt-10 text-4xl">
    TOUR LIST
</div>
<div class="flex justify-end">
    <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2" onclick="location.href='{{ route('hotel.index') }}'">new add</button>
    <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2" onclick="location.href='{{ route('hotel.download') }}'">csv download</button>
</div>
<div class="flex justify-center items-center pt-4">

    <table class="w-full mx-4 border-collapse border border-slate-400">
        <thead class="">
            <tr class="">
                <th class="border border-slate-300 px-4 bg-blue-300">Edit</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Id</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Date</th>
                <th class="border border-slate-300 px-4 bg-blue-300">I-00000</th>
                <th class="border border-slate-300 px-4 bg-blue-300">AGENT</th>
                <th class="border border-slate-300 px-4 bg-blue-300">TOUR NAME</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Series/Adhoc</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Destination</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Situation</th>
                <th class="border border-slate-300 px-4 bg-blue-300">PAX</th>
                <th class="border border-slate-300 px-4 bg-blue-300">SERVICE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td class="border border-slate-300 py-2"><a href="{{ route('edit.hotel',['hotel_id' => $hotel->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                    <td class="border border-slate-300 py-2">{{ $tour->id ? $hotel->id : ' '}}</td>
                    <td class="border border-slate-300 py-2">{{ $hotel->city ? $hotel->city : ' '}}</td>
                    <td class="border border-slate-300 py-2">{{ $hotel->hotel_name ? $hotel->hotel_name : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $hotel->address ? $hotel->address : null }}</td>
                    <td class="border border-slate-300 py-2">{{ $hotel->tel ? $hotel->tel : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $hotel->fax ? $hotel->fax : null}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
<div>
    {{$tours->links('vendor.pagination.tailwind')}}
</div>

</body>
</html>



