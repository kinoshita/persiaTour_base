<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Models\Agent;
use App\Models\Destination;
use App\Models\Situation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersiaTour;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;

class TourListController extends Controller
{
    // テスト用
    //
    public function setPasswordForUsers(Request $request)
    {
        Log::info('set password for users');
        $name = 'test_name';
        $email = 'kinoko89@gmail.com';
        $password = 'test1234';
        $password = Hash::make($password);
        try{
            $user = DB::transaction(function() use ($request, $name, $password, $email){
                $ret = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                ]);
                return $ret;
            });
            Log::info($user);
        }catch (\Throwable $e){
            Log::info($e);
        }
    }

    /**
     * @param Request $request
     * @return void
     */

    public function updatePasswordForUsers(Request $request)
    {

        $id = '2';
        $name = 'test_name';
        $email = 'kinoko89@gmail.com';
        $password = 'test12345';
        $password = Hash::make($password);
        try{
            $user = DB::transaction(function() use ($request, $id, $name, $email, $password){
                User::where('id', $id)
                    ->update([
                        'name' => $name,
                        'email' => $email,
                        'password' => $password
                    ]);
            });
        }catch (\Throwable $e){
            Log::info($e);
        }
    }


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
        $request->session()->regenerateToken();
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
            return view('tour.tour_complete');
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

    public function updateConfirmTour(Request $request)
    {
        return view('tour.tour_update_confirm',['all'=>$request->all()]);
    }


    /**
     * @param TourRequest $request
     * @return void
     */
    public function updateCompleteTour(TourRequest $request)
    {
        $request->session()->regenerateToken();
        try{
            $tour = DB::transaction(function() use ($request){
                $ret = PersiaTour::where('id', $request->input('reference_id'))
                    ->update([
                        'tour_date' => $request->input('tour_date'),
                        'agent' => $request->input('agent'),
                        'tour_name' => $request->input('tour_name'),
                        'series' => $request->input('series'),
                        'destination' => $request->input('destination'),
                        'situation' => $request->input('situation'),
                        'pax' => $request->input('pax'),
                        'service' => $request->input('service')
                    ]);
                return $ret;
            });

        }catch (\Throwable $e){

        }
        return view('tour.tour_update_complete');
    }

    public function updateTour(TourRequest $request)
    {
        // setボタン連打、更新ボタン対応
        $request->session()->regenerateToken();

        try{
            $tour = DB::transaction(function() use ($request){
                $ret = PersiaTour::where('id', $request->input('reference_id'))
                    ->update([
                        'tour_date' => $request->tour_date,
                        'agent' => $request->agent,
                        'tour_name' => $request->tour_name,
                        'series' => $request->series,
                        'destination' => $request->destination,
                        'situation' => $request->situation,
                        'pax' => $request->pax,
                        'service' => $request->service
                    ]);
                return $ret;
            });

        }catch (\Throwable $e){

        }
        view('');

    }



    /**
     *
     * @return void
     *
     */
    public function downloadCsvList():mixed
    {
        $tourlist = PersiaTour::all();

        $csvHeader = [  'tour_date','id', 'agent',
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

                $tmp = $row['id'];
                $row['id'] = $row['tour_date'];
                $row['tour_date'] = $tmp;

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
