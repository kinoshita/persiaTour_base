<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Hotel List</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>

</div>
<div class="flex justify-center items-center pt-4">
    <table class="w-full mx-4 border-collapse border border-slate-400">
        <thead>
            <tr>
                <th class="border border-slate-300 px-4">Edit</th>
                <th class="border border-slate-300 px-4">Id</th>
                <th class="border border-slate-300 px-4">City</th>
                <th class="border border-slate-300 px-4">Hotel Name</th>
                <th class="border border-slate-300 px-4">Address</th>
                <th class="border border-slate-300 px-4">Tel</th>
                <th class="border border-slate-300 px-4">Fax</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td class="border border-slate-300 py-2"><a href="{{ route('edit.hotel',['hotel_id' => $hotel->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                    <td class="border border-slate-300 py-2">{{ $hotel->id ? $hotel->id : ' '}}</td>
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
    eeeee
</div>


<div>
    {{$hotels->links()}}
    {{ $hotels->total() }}
</div>

</body>
</html>



