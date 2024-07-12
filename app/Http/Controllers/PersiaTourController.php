<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class PersiaTourController extends Controller
{
    // PersiaTour set TourData
    public function setTourData(Request $request)
    {
        Log::info('tt',['all'=> $request->all()]);
        return response()->json([
            'text' => 'setting ok'
        ]);
    }
    // PersiaTour get TourData
    public function getTourData(Request $request)
    {

    }



}
