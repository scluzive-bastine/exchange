<?php

namespace App\Http\Controllers\Admin;

use App\StakingLimit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class StakingMinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(Request $request, StakingLimit $stakinglimit)
    {
        $data = $request->all();
        $validatedData = Validator::make($request->all(), [
            'minStaking' => 'required|integer'
        ]);
        // dd($data);
        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData);
        }

        $stakinglimit->staking_min = $request->minStaking;
        $stakinglimit->save();
        return redirect()->back()->with('staking-success', 'Staking mininum saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = $request->all();
        // dd($data);
        $validatedData = Validator::make($request->all(), [
            'minStaking' => 'required|integer'
        ]);
        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData);
        }

        $stakinglimit = StakingLimit::find($id);
        $stakinglimit->staking_min = $request->minStaking;
        $stakinglimit->save();
        return redirect()->back()->with('staking-success', 'Staking mininum Updated');
        // return redirect(route('staking.dashboard'))->with('staking-success', 'Staking mininum Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
