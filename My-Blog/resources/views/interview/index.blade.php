@extends('layouts.app')


@section('content')


<div class="container m-auto text-center pt-14 pb-4">
    <h1 class="text-6xl font-bold">All Interviews</h1>
    
</div>
@if (Auth::check())

<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    <a href="/interview/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start">Add New</a>
</div>
        
      

@endif
@foreach ($interviews as $interview)
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-4">
    <div class="flex">
    <img class="object-cover" src="/images/{{$interview->image}}" alt="" >
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-4 md:pt-0">
            {{$interview->title}}
        </h2>
        <div>
            By: <span class="text-gray-500 italic">
                {{$interview->user->name}}
            </span> on: <span class="text-gray-500 italic">
                {{date('d-m-Y',strtotime($interview->updated_at))}}
            </span>
            <p class="text-l text-gray-700 py-8 leading-6">
                {{ Illuminate\Support\Str::limit($interview->description, 200) }}
...
                           </p>
            <a href="/interview/{{$interview->slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>
</div>
@endforeach
@endsection