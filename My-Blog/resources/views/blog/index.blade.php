@extends('layouts.app')


@section('content')




<div class="container m-auto text-center pt-14 pb-4">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>
@if (Auth::check()){
    <div class="container mx-auto p-5 border-b border-gray-300">
        <div class="inline-block mr-4">
          <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start">Add New</a>
        </div>
        <div class="inline-block">
          <a href="/interview" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start">Add Interviw</a>
        </div>
        <div class="inline-block">
            <a href="/fixtures" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start">Add Fixtures</a>
          </div>
        
      </div>
      
}
    
@endif

    @foreach ($posts as $item)
    <div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-4">
        <div class="flex">
            <img class="object-cover" src="/images/{{$item->image_path}}" alt="" >
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-4 md:pt-0">
                {{$item->title}}
            </h2>
            <div>
                By: <span class="text-gray-500 italic">
                    {{$item->user->name}}
                </span> on: <span class="text-gray-500 italic">
                    {{date('d-m-Y',strtotime($item->updated_at))}}
                </span>
                <p class="text-l text-gray-700 py-8 leading-6">
                   {{$item->description}}
                </p>
                <a href="/blog/{{$item->slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
            </div>
        </div>
    </div>
    @endforeach

    
    

    
@endsection