<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AgentListController extends Controller
{
    //
    public function getAgentList()
    {
        $agent_list = DB::table('agents')->paginate(3);
        return view('agent.agentlist',['agents' => $agent_list]);
    }

    public function settingAgent()
    {
        return view('agent.agent_settings');
    }

    public function confirmAgent(AgentRequest $request)
    {
        $all = $request->all();
        return view('agent.agent_confirm',compact('all'));
    }

    public function completeAgent(AgentRequest $request)
    {
        //$request->session()->regenerateToken();
        try {
            $agent = DB::transaction(function () use($request){
               $ret = Agent::create([
                   'name' => $request->input('name'),
                   'short_name' => $request->input('short_name'),
                   'remarks' => $request->input('remarks')
               ]);
               return $ret;
            });
            return view('agent.agent_complete');
        }catch (\Throwable $e)
        {
            Log::info($e);
        }
    }


    public function editAgent()
    {

    }
}
