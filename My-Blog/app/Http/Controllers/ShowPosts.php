<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Models\Interview;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Ramsey\Uuid\Type\Integer;

class ShowPosts extends Controller
{
    public function getPosts(){

    $data = DB::table('posts')  
    ->where('category_id', '=', 1)
    ->orderBy('posts.created_at', 'desc')
    ->get();

        return $data;
    }
    public function youthPosts(){
        $data = DB::table('posts')
        ->where('category_id','=',4)
        ->orderBy('posts.created_at','desc')
        ->get();

        return $data;
    }
    public function lionPosts(){
        $data = DB::table('posts')
        ->where('category_id','=',2)
        ->orderBy('posts.created_at','desc')
        ->get();

        return $data;
    }
    public function lionssesPosts(){
        $data = DB::table('posts')
        ->where('category_id','=',3)
        ->orderBy('posts.created_at','desc')
        ->get();

        return $data;
    }
    public function futsalPosts(){
        $data = DB::table('posts')
        ->where('category_id','=',5)
        ->orderBy('posts.created_at','desc')
        ->get();

        return $data;
    }
    public function getFixtures(){
        $data = DB::table('fixtures')
        
        ->get();

        return $data;
    }
    public function getHeroPosts()
{
    $posts = DB::table('posts')
        ->orderBy('created_at', 'desc')
        ->select('title', 'description', 'image_path')
        ->take(1)
        ->get();

    return response()->json($posts);
   
}
    public function fixtureSni(){
        $fixture = DB::table('fixtures')
        ->orderBy('created_at', 'desc')
        ->select('fixtures.*')
        ->take(1)
        ->get();
    
        return response()->json($fixture);
    }
    public function postSnippet(){

        $posts = DB::table('posts')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'News')
        ->orderBy('created_at', 'desc')
        ->select('posts.*')
        ->take(3)
        ->get();
        return $posts;
    }
    public function index()
    {
        return view('welcome');
       
    }
    public function getInterviewSnippet(){
        $interview = DB::table('interviews')
        ->orderBy('created_at', 'desc')
        ->select('title', 'description', 'image' , 'video_src')
        ->take(2)
        ->get();
        return $interview;
    }
    public function showNews(Request $request){
     
            $id = $request->input('id');
            $data = Post::select('posts.*', 'users.name')
                ->join('users', 'posts.user_id', '=', 'users.id')
                ->where('posts.id',$id )
                ->first();
        
            return $data;
        
    }
    public function showFixtutres(Request $request){
     
        $id = $request->input('id');
        $data = Fixture::select('fixtures.*', 'users.name')
            ->join('users', 'fixtures.user_id', '=', 'users.id')
            ->where('fixtures.id',$id )
            ->first();
    
        return $data;
    
}
    

    public function getInterviews(){
        $data = DB::table('interviews')->orderBy('created_at', 'desc')
        ->get();
        return $data;

    }
    public function showInterviews(Request $request){
        $id = $request->input('id');
        $data = Interview::select('interviews.*', 'users.name')
                    ->join('users', 'interviews.user_id', '=', 'users.id')
                    ->where('interviews.id', $id)
                    ->first();
                return $data;
    }
}
