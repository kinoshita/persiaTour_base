<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentListController extends Controller
{
    //
    public function getAgentList()
    {
        $agent_list = DB::table('agents')->paginate(3);
        return view('agent.agentlist',['agents' => $agent_list]);
    }

    public function editAgent()
    {

    }
}
