@extends('layouts.app')

@section('content')
    <div class="m-auto text-center pt-14 pb-5">
        <h1 class="text-6xl font-bold">
            Edit Post
        </h1>
    </div>
    <div class="container mx-auto px-4">
        <form action="/fixtures/{{$fixture->slug}}" method="POST" enctype="multipart/form-data" >@csrf @method('PUT')
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
              Title
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$fixture->title}}"  type="text" placeholder="Enter title" name="title">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="equipe">
              Equipe Name
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$fixture->equipe}}" type="text" placeholder="Enter equipe name" name="equipe">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="team_name">
              Team Name
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value={{$fixture->team_name}}  type="text" placeholder="Enter team name" name="team_name">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="team_logo">
              Team Logo
            </label>
            <input type="file"  class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="team_logo">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="cover_image">
              Cover Image
            </label>
            <input type="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image_cover">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
              Date
            </label>
            <input type="date" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="match_date" value={{$fixture->match_date}}>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
              Time
            </label>
            <input type="time" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="match_time" value={{$fixture->match_time}}>
          </div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Edit Post</button>
        </form>
      </div>
      
      
      
  @endsection