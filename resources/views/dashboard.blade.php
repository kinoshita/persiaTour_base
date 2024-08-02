<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="flex justify-center border mx-24 mt-1s bg-white">
        <span>
            This page is for creating tours and hotel lists within Persia Tours.<br>
    Please select the Create Tour or Create Hotel List page.
        </span>
    </div>
    <div class="flex justify-center mt-4">
        <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2 text-3xl" onclick="location.href='{{ route('tour.list') }}'">Tour List</button>
        <button type="button" class="bg-blue-700 text-white rounded px-4 mx-2 text-3xl" onclick="location.href='{{ route('hotel.list') }}'">Hotel List</button>
    </div>
</x-app-layout>
