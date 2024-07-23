<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Models\Agent;
use App\Models\Destination;
use App\Models\Situation;
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
        $tours = DB::table('persiatours')->paginate(2);
        return view('tour.tourList', compact('tours'));
    }

    //
    public function setTourList(Request $request)
    {
        // Agent
        $agents = Agent::all();
        $destinations = Destination::all();
        $situations = Situation::all();
        // AGENTが0の場合
        if($agents->count() == 0) return view('tour.tour_resettings');
        return view('tour.tour_settings', compact('agents', 'destinations', 'situations'));
    }

    /**
     *  tour info input confirm
     * @param TourRequest $request
     * @return void
     */
    public function confirmTour(TourRequest $request):mixed
    {
        Log::info($request->all());
        return view('tour.tour_confirm',['all'=>$request->all()]);
    }
    /**
     *
     *
     * @param TourRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|void
     */
    public function completeTour(TourRequest $request)
    {
        Log::info($request->input('tour_date'));
        try{
            $tour = DB::transaction(function () use ($request){
                $ret = PersiaTour:: create([
                    'tour_date' => $request->input('tour_date'),
                    'agent' => $request->input('agent'),
                    'tour_name' => $request->input('tour_name'),
                    'series' => $request->input('series'),
                    'destination' => $request->input('destination'),
                    'situation' => $request->input('situation'),
                    'pax'       => $request->input('pax'),
                    'service'    => $request->input('service')
                ]);
                return $ret;
            });
            return view('tour_complete');
        }catch (\Throwable $e){
            Log::info($e);
        }
    }
    /**
     *
     * @param TourRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|void
     */

    public function setTour(TourRequest $request)
    {
        try{
            $tour = DB::transaction(function () use ($request){
               $ret = PersiaTour:: create([
                   'date' => $request->input('tour_date'),
                   'agent' => $request->input('agent'),
                   'tour_name' => $request->input('tour_name'),
                   'series' => $request->input('series'),
                   'destination' => $request->input('destination'),
                   'situation' => $request->input('situation'),
                   'pax'       => $request->input('pax'),
                   'service'    => $request->input('service')
               ]);
               return $ret;
            });
            return view('tour_confirm', );
        }catch (\Throwable $e){

        }
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
     * @param Request $request
     * @return mixed
     */
    public function editTour(Request $request):mixed
    {
        $tour = PersiaTour::where('id', $request->input('tour_id'))->first();
        $agents = Agent::all();
        $destinations = Destination::all();
        $situations = Situation::all();
        return view('tour.tour_edit',compact('tour','agents','destinations','situations'));
    }

    public function updateTourList(TourRequest $request)
    {

    }



    /**
     *
     * @return void
     *
     */
    public function downloadCsvList():mixed
    {
        $tourlist = PersiaTour::all();

        $csvHeader = [  'id', 'tour_date', 'reference_id', 'agent',
                        'tour_name', 'series', 'destination', 'situation',
                        'pax', 'service', 'created_at', 'updated_at'
                    ];
        $csvData = $tourlist->toArray();
        $response = new StreamedResponse(function () use ($csvHeader, $csvData){
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $csvHeader);
            foreach($csvData as $row){
                $row['id'] = 'I-' . sprintf('%05d', $row['id']);
                Log::info($row['id']);
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
