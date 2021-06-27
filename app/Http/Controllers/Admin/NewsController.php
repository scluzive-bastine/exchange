<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.news.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {

       $data = $request->all();
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // dd($imageName);

        $news->title = $request->title;
        $news->content = $request->content;
        $news->tag_id = $request->tag;
        $news->image = $imageName;
        $news->save();

        return redirect(route('news.index'))->with('messages', 'Post created Successfully');


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
        $post = News::find($id);
        $tags = Tag::all();
        return view('admin.news.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        // dd($request->all());
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'tag' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }


        if(empty($request->image)) {
            $imageName = $news->image;
            // dd($request->image);
        } else {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        // $news = News::find($news);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->tag_id = $request->tag;
        $news->image = $imageName;
        $news->save();

        return redirect(route('news.index'))->with('success', 'Post successfully edited');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();     
        return redirect(route('news.index'))->with('success', 'Faq deleted successfully');
    }
}
