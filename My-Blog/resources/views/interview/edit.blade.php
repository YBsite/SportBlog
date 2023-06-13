
@extends('layouts.app')

@section('content')
    <div class="m-auto text-center pt-14 pb-5">
        <h1 class="text-6xl font-bold">
            Edit Interview
        </h1>
    </div>
    <div class="container mx-auto px-4">
        <form action="/interview/{{$interview->slug}}" method="POST" enctype="multipart/form-data" >@csrf @method('PUT')
          
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
              Title
            </label>
            <input value="{{$interview->title}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter title" name="title">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
              Video Src
            </label>
            <input value="{{$interview->video_src}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter title" name="video">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="equipe">
              Description
            </label>
            <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" id="equipe" type="text" placeholder="Enter a description" name="description">{{$interview->description}}</textarea>
          </div>
      
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
              Post Image
            </label>
            <input type="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image">
          </div>
      
      
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Edit Interview</button>
        </form>
      </div>
      
      
      
  @endsection

