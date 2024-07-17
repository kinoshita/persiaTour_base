<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelEditRequest;
use App\Models\Hotel;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HotelListController extends Controller
{

    public function index(Request $request)
    {
        return view('hotel');
    }

    /**
     *
     * @param Request $request
     * @return
     */
    public function getHotelList(Request $request)
    {
        $pending_list = DB::table('hotels')->paginate(3);
        Log::info($pending_list);
        return view('hotelList',['hotels'=>$pending_list]);
    }
    /**
     * @param Request $request
     * @return void
     */
    public function editHotel(Request $request):mixed
    {
        Log::info($request->input('hotel_id'));
        $hotel = Hotel::where('id', $request->input('hotel_id'))->first();

        return view('hotel_edit',compact('hotel'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Http\JsonResponse
     *
     */
    public function updateHotel(HotelEditRequest $request)
    {
        Log::info($request->all());
    }

    public function setHotel(Request $request)
    {
        Log::info('setHotel');
        try{
            $hotel = DB::transaction(function() use ($request){
                Log::info('transaction');
                $ret = Hotel::create([
                    'city' => $request->input('city_name'),
                    'hotel_name' => $request->input('hotel_name'),
                    'address' => $request->input('address'),
                    'tel'     => $request->input('tel'),
                    'fax'     => $request->input('fax'),

                ]);
                Log::info($ret);
                return $ret;
            });
            Log::info($hotel);
            return view('hotel_confirm',compact('hotel'));
        }catch (\Throwable $e){
            Log::info($e);
            return response()->json();
        }
    }


}