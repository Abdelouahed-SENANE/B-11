@extends('layouts.Layout')
@section('content')
    <div style="background-image: url('/images/background.jpg')" class="wrapper text-white relative bg-cover bg-center
    w-full
    h-[100vh]" >
        @include('components.navigation')

        <div class="absolute bg-black/50 left-0 top-0 w-full h-full"></div>
        <div class="container relative mx-auto w-[80%]">
            <div class="flex items-center justify-center w-full h-[calc(100vh-64px)]">
                <div class="max-w-[700px]">
                    <h1 class=" text-4xl
                     lg:text-6xl font-bold mb-5 text-center">
                        Explore Our Delicious Recipes
                    </h1>
                    <p class="text-center text-sm lg:text-base">
                        Welcome to our culinary haven, where taste meets creativity and every dish tells a story. Dive into a world of flavors, aromas, and culinary adventures as we share our collection of mouthwatering recipes. From comforting classics to innovative creations, our curated selection caters to every palate and occasion.
                    </p>
                    <div class="flex justify-center my-5 ">
                        <button class="bg-orange-500 text-sm lg:text-base block px-10 py-2.5 rounded-3xl">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
