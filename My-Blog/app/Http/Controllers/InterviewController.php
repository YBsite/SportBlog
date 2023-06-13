<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('interview.index')
        ->with('interviews',Interview::get());
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('interview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
            'video'=>'required'
        ]);

        $slug = Str::slug($request->title,'-');
        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        
        Interview::create([
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'slug'=>$slug,
            'image'=>$newImageName,
            'user_id'=>auth()->user()->id,
            'video_src'=>$request->input('video')
        ]);
        return redirect('/interview'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('interview.show')
        ->with('interview',Interview::where('slug',$slug)->first());
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('interview.edit')
        ->with('interview',Interview::where('slug',$slug)->first());
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
            'video'=>'required'
        ]);
        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
    
        Interview::where('slug',$slug)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image'=>$newImageName,
            'slug'=>$slug,
            'video_src'=>$request->input('video'),
            'user_id'=>auth()->user()->id,
        ]);
        return redirect('/interview/' .$slug)->with('message','updated succefuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Interview::where('slug',$slug)->delete();
        return redirect('/interview/')->with('message','the post has deleted');  
    }
}
