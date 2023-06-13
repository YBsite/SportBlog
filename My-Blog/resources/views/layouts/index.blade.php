@extends('layouts.app')
@section('content')

    <title>MRV_BLOG</title>
    
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class='text-gray-100 text-5xl uppercase font-bold pb-9'>welcome to home of moroccan football</h1>
        <a class= 'bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl' href="/blog">start reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-14 mx-auto py-10">
        <div>
            <img class="sm:rounded-lg" src="https://wp.inews.co.uk/wp-content/uploads/2022/12/SEI_137309593.jpg" alt="">
        </div>

        <div class="flex flex-col items-left justify-center m-10 sm:m-0"> 
            <h2 class="font-bold text-gray-700 text-4xl uppercase ">
                About mrv
                </h2>
            <p class="font-bold text-gray-600 text-xl pt-2">
                Morocco’s run to the semi-finals of Qatar 2022 has stunned the world, but it has been almost two decades in the making
            </p>
            <p class="py-4 text-gray-500 text-sm leading-5">
                On the walls of Morocco’s national training centre there are photos of the national side’s greatest achievements: the 1976 Africa Cup of Nations, the two African Nations Championships, the famous 1986 side who reached the knockout stages of the World Cup
            </p>

            <a href="" class="bg-gray-700 text-gray-100 py-4 px-4 rounded-lg font-bold text-l place-self-start">Read more</a>
        </div>
    </div>


    <div class="text-center p-10 bg-yellow-700 text-gray-100">
        <h2 class="text-2xl">
            Here you will find
        </h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">News and updates</div>
            <div class="font-bold text-2xl py-2">Last Interviews</div>
            <div class="font-bold text-2xl py-2">Next Fixtures</div>
            <div class="font-bold text-2xl py-2">All Branches News</div>
            
        </div>
    </div>


   
    
@endsection