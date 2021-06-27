<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutUs::all();
        // dd($data);
        return view('admin.about.index', compact('data'));
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
    public function store(Request $request, AboutUs $about)
    {
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();

        return redirect()->back()->with('success', 'About us content created successfully');

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
        $data = AboutUs::find($id);
        return view('admin.about.edit', compact('data'));
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
        // $validatedData = Validator::make($request->all(), [
        //     'title' => 'required|string',
        //     'content' => 'required|string'
        // ]);
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required'
        ]);

        // if($validatedData->fails()) {
        //     return redirect()->back()->withErrors($validatedData)->withInput();
        // }

        $about = AboutUs::find($id);
        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();

        return redirect(route('about-us.index'))->with('success', 'About us content updated successfully');
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
