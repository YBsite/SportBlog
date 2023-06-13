@extends('layouts.app')
@section('content')
<div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->has('message')}}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>

  <div class="container m-auto text-center pt-14 pb-4">
    <h1 class="text-6xl font-bold">
        {{$fixture->title}}
    </h1>
    <div class="mt-2">
        By: <span class="text-gray-500 italic">{{$fixture->user->name}}</span>
        on: <span class="text-gray-500 italic">{{date('d-m-Y',strtotime($fixture->updated_at))}}</span>
    </div>
</div>
<div class="container m-auto pt-14 pb-4">
    <div class="flex h-full">
        <img class="object-cover w-full " src="/images/{{$fixture->image_cover}}" />
    </div>

    <div class="flex justify-center">
        <div class="flex items-center mt-4">
            <div class="image-side mr-2">
                <img class="h-auto w-10" src="https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_F%C3%A9d%C3%A9ration_Royale_Marocaine_Football.svg/1200px-Logo_F%C3%A9d%C3%A9ration_Royale_Marocaine_Football.svg.png" alt=""> <!-- add the first logo -->
            </div>
            <span class="text-gray-500 font-bold mx-2">vs</span>
            <div class="image-side">
                <img class="h-auto w-10" src='/images/{{$fixture->team_logo}}' alt=""> <!-- add the second logo -->
            </div>
        </div>
    </div>
    
    <br/>
    <div class="flex justify-center text-gray-500 italic mb-2 mt-4 text-center">
         {{$fixture->match_date}} - {{$fixture->match_time}}
    </div>
    @if (Auth::user() && Auth::user()->id == $fixture->user_id)

<a href="/fixtures/{{$fixture->slug}}/edit" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Edit Post</a>
<form action="/fixtures/{{$fixture->slug}}" method="post" class="inline-block"> @csrf @method('delete')
    <button type="submit" class="bg-red-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start mt-6">Delete Post</button>
</form>

    
@endif
</div>

@endsection