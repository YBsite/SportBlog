@extends('layouts.app')

@section('content')
    <div class="m-auto text-center pt-14 pb-5">
        <h1 class="text-6xl font-bold">
            Edit Post
        </h1>
    </div>
    <div class="container mx-auto px-4">
        <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data" >@csrf @method('PUT')
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
              Title
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$post->title}}" type="text" placeholder="Enter title" name="title">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="equipe">
              Description
            </label>
            <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" id="equipe" type="text" placeholder="Enter a description" name="description">{{$post->description}}</textarea>
          </div>
      
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
              Post Image
            </label>
            <input type="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image">
          </div>
      
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="category">
              Category
            </label>
            <select class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$post->category}}"  name="category">
              <option value="1">News</option>
              <option value="2">Atlas Lions</option>
              <option value="3">Atlas Lionsses</option>
              <option value="4">Youth</option>
              <option value="5">Futsal</option>
            </select>
          </div>
      
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Edit Post</button>
        </form>
      </div>
      
      
      
  @endsection