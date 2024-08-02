<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>AGENTS List</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>

</div>
<div class="flex justify-center mt-10 text-4xl">
    AGENTS LIST
</div>

<div class="text-center">

</div>

<div class="flex justify-end">

    <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2" onclick="location.href='{{ route('setting.agent') }}'">new add</button>
    <!--<button type="button" class="bg-blue-700 text-white rounded px-4 mx-2" onclick="location.href='{{ route('hotel.download') }}'">csv download</button>-->
</div>
<div class="flex justify-center items-center pt-4">

    <table class="w-full mx-4 border-collapse border border-slate-400">
        <thead class="">
            <tr class="">
                <th class="border border-slate-300 px-4 bg-blue-300">Edit</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Id</th>
                <th class="border border-slate-300 px-4 bg-blue-300">NAME</th>
                <th class="border border-slate-300 px-4 bg-blue-300">SHORT NAME</th>
                <th class="border border-slate-300 px-4 bg-blue-300">REMARKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td class="border border-slate-300 py-2"><a href="{{ route('edit.hotel',['hotel_id' => $agent->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                    <td class="border border-slate-300 py-2">{{ $agent->id ? $agent->id : 'NULL'}}</td>
                    <td class="border border-slate-300 py-2">{{ $agent->name ? $agent->name : 'Nothing'}}</td>
                    <td class="border border-slate-300 py-2">{{ $agent->short_name ? $agent->short_name : null }}</td>
                    <td class="border border-slate-300 py-2">{{ $agent->remarks ? $agent->remarks : 'Nothing'}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
<div>

    {{$agents->links('vendor.pagination.tailwind')}}
</div>

</body>
</html>



