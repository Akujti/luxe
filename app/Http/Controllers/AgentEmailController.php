<?php

namespace App\Http\Controllers;

use App\Models\AgentEmail;
use Illuminate\Http\Request;

class AgentEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = AgentEmail::get();
        return view('agent-emails.index', compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        AgentEmail::create(['email' => $request->email]);
        return back()->with('message', 'Email added to email list');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgentEmail  $agentEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgentEmail $agentEmail)
    {
        $request->validate(['email' => 'required|email']);
        $agentEmail->update(['email' => $request->email]);
        return back()->with('message', 'Email Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgentEmail  $agentEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgentEmail $agentEmail)
    {
        $agentEmail->delete();
        return back()->with('message', 'Email Deleted');
    }
}
