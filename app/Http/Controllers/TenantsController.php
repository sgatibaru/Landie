<?php

namespace App\Http\Controllers;

use App\Tenants;
use App\Houses;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tenants = Tenants::paginate(15);
        $rooms = Houses::all();

        // $nexmo = app('Nexmo\Client');
        //
        // $nexmo->message()->send([
        //     'to'   => '+254719546525',
        //     'from' => '+254719546525',
        //     'text' => 'This is a test message to verify payment of rent.'
        // ]);

        return view('landlord.partials.home',compact('tenants','rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tenant = new Tenants();
        $tenant->username = $request->username;
        $tenant->email = $request->email;
        $tenant->houses_id= $request->roomnumber;
        $tenant->contact = $request->contact;

        $tenant->save();

        return redirect()->route('getTenants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function show(Tenants $tenants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenants $tenants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenants $tenants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenants $tenants)
    {
        //
    }
}
