<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();

        return view('admin.agent.index',compact('agents'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $agents = Agent::create( $request->all() );

        if($request->hasFile('imgAgent'))
        {
            $agents->imgAgent = $request->file('imgAgent')->store('public');
        }
        

        $agents->save();

        return back();
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $agents = Agent::findOrFail($request->agent_id);

        $agents->update($request->all());

        if($request->hasFile('imgAgent'))
        {
            $agents->imgAgent = $request->file('imgAgent')->store('public');
        }
        

        $agents->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $agents = Agent::findOrFail($request->agent_id);
     
        $agents->delete();
     
        return back();
    }
}
