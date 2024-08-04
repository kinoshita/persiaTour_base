<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Hotel List</title>
    @vite('resources/css/app.css')
　　<style>
      .d-none {
          display:none;
      }
  </style>
</head>
<body>
<div>

</div>
<div class="flex justify-center mt-10 text-4xl">
    HOTEL LIST
</div>
<!-- -->
<div>
    <button type="button" class="file-download-btn"> download test</button>
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
                <th class="border border-slate-300 px-4 bg-blue-300">City</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Hotel Name</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Address</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Tel</th>
                <th class="border border-slate-300 px-4 bg-blue-300">Fax</th>
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

@if (session('message'))
    {{ session('message') }}
@endif

<div id="flash-message" class="d-none">
    <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded" role="alert">
        <p class="font-bold">Informational message</p>
        <p class="text-sm">Some additional text to explain said message.</p>
    </div>
</div>



<div>

    {{$hotels->links('vendor.pagination.tailwind')}}
</div>
<script>
    button = document.querySelector('.file-download-btn');

    button.addEventListener("click", (event) => {
        ret = window.open('{{ route('hotel.download') }}');  // URLを指定してタブを開く -> コントローラーでダウンロード処理が実行される
        if(!ret){
            console.log('fail');
        }else{
            console.log('success');
            const fls = document.getElementById("flash-message");
            fls.classList.remove("d-none")
            setTimeout(() => {
                fls.classList.add("d-none");
            }, 3000);
        }




        //location.reload(true);
        //alert('download success');
    });
</script>
</body>
</html>



