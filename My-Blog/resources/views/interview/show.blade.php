@extends('layouts.app')
@section('content')
<div class="container m-auto text-center pt-14 pb-4">
    <h1 class="text-6xl font-bold">
        {{$interview->title}}
    </h1>
    <div class="mt-2">
        By: <span class="text-gray-500 italic">{{$interview->user->name}}</span>
        on: <span class="text-gray-500 italic">{{date('d-m-Y',strtotime($interview->updated_at))}}</span>
    </div>
</div>
<div class="container m-auto pt-14 pb-4">
    <div class="flex h-96">
        <iframe class="object-cover w-full " src={{$interview->video_src}}></iframe>
    </div>

    <div class="text-l text-gray-700 py-8 leading-6">
        {{$interview->description}}
    </div>
    @if (Auth::user() && Auth::user()->id == $interview->user_id)

<a href="/interview/{{$interview->slug}}/edit" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Edit Interview</a>
<form action="/interview/{{$interview->slug}}" method="post" class="inline-block"> @csrf @method('delete')
    <button type="submit" class="bg-red-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start mt-6">Delete Post</button>
</form>

    
@endif
</div>
@endsection