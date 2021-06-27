<?php

namespace App\Http\Controllers\Admin;


use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
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
    public function store(Request $request, Faq $faq)
    {

        $validatedData = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        } 

        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->save();
        
        // dd('created successfully');
        return redirect()->back()->with('success', 'FAQ was created successfully');
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
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        } 

        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->save();
        
        // dd('created successfully');
        return redirect(route('faq.index'))->with('success', 'FAQ was edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();     
        return redirect(route('faq.index'))->with('success', 'Faq deleted successfully');
    }
}
