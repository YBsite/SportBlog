@extends('layouts.app')


@section('content')




<div class="container m-auto text-center pt-14 pb-4">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>
@if (Auth::check()){
    <div class="container mx-auto p-5 border-b border-gray-300">
        <div class="inline-block mr-4">
          <a href="/fixtures/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start">Add New Fixture</a>
        </div>
       
        
      </div>
      
}
    
@endif

    @foreach ($fixtures as $item)
    <div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-4">
        <div class="flex">
            <img class="object-cover" src="/images/{{$item->image_cover}}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-4 md:pt-0">
                {{$item->title}}
            </h2>
            <div class="flex items-center text-gray-500 italic mb-2">
                By: {{$item->user->name}} on: {{date('d-m-Y',strtotime($item->updated_at))}}
            </div>
            <div class="flex items-center">
                <div class="image-side mr-2">
                    <img class="h-auto w-10" src="https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_F%C3%A9d%C3%A9ration_Royale_Marocaine_Football.svg/1200px-Logo_F%C3%A9d%C3%A9ration_Royale_Marocaine_Football.svg.png" alt=""> <!-- add the first logo -->
                </div>
                <span class="text-gray-500 font-bold mx-2">vs</span>
                <div class="image-side">
                    <img class="h-auto w-10" src="/images/{{$item->team_logo}}" alt=""> <!-- add the second logo -->
                </div>
            </div>
            <br/>
            <div class="flex items-center text-gray-500 italic mb-2 mt-4">
                 {{$item->match_date}} - {{$item->match_time}}
            </div>
            <p class="text-l text-gray-700 py-8 leading-6">
                {{$item->description}}
            </p>
            <a href="/fixtures/{{$item->slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>
    
    
    
    @endforeach

    
    

    
@endsection