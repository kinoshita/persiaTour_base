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
                    <td class="border border-slate-300 py-2"><a href="{{ route('edit.tour',['tour_id' => $tour->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                    <td class="border border-slate-300 py-2">{{ $tour->id ? $tour->id : ' '}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->tour_date ? $tour->tour_date : ' '}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->reference_id ? $tour->reference_id : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->agent ? $tour->agent : null }}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->tour_name ? $tour->tour_name : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->series ? $tour->series : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->destination ? $tour->destination : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->situation ? $tour->situation : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->pax ? $tour->pax : null}}</td>
                    <td class="border border-slate-300 py-2">{{ $tour->service ? $tour->service : null}}</td>
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



