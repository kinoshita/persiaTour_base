<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersiaTour;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;

class TourListController extends Controller
{
    //
    public function getList(Request $request)
    {
        return view('tourlist',['users'=>DB::table('persiatours')->paginate(2)]);
    }

    // pending list
    // 1: exec
    // 2: pending
    // 3: cancel
    public function getPendingList(Request $request)
    {
        $situation = 2;
        $pendinglist = DB::table('persiatours')->where('situation', $situation)->paginate(1);
        return view('tourlist',['users'=>$pendinglist]);

    }




    /**
     *
     * @return void
     *
     */
    public function downloadCsvList():mixed
    {
        $tourlist = PersiaTour::all();
        Log::info($tourlist);
        $csvHeader = [  'id', 'tour_date', 'reference_id', 'agent',
                        'tour_name', 'series', 'destination', 'situation',
                        'pax', 'service', 'created_at', 'updated_at'
                    ];
        $csvData = $tourlist->toArray();
        $response = new StreamedResponse(function () use ($csvHeader, $csvData){
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $csvHeader);
            foreach($csvData as $row){
                fputcsv($handle, $row);
            }
            fclose($handle);
        },200,[
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="users.csv"',
        ]);

        return $response;
    }




}