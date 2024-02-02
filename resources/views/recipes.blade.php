@extends('layouts.Layout')

@include('components.navigation')
<div class="">
    <div class="">
        <div style="background-image: url('/images/recipes.jpg')" class="text-center relative h-[300px] bg-cover
        bg-center
        bg-[url('/images/recipes.jpg')] flex
        justify-center
        items-center">
            <div class="bg-black/50 absolute left-0 right-0 w-full h-full"></div>
            <div class="relative text-white">
                <h1 class="text-5xl font-medium">All Recipes</h1>
                <p class="w-[400px] py-5">Discover a community-driven culinary experience with our user-contributed
                    recipes
                    section.
                </p>
            </div>
        </div>
        <div class="container mx-auto w-[80%]">
            <div class="text-center text-2xl font-medium my-10">
                @if(session('message'))
                    <p>{{ session('message') }}</p>
                @endif
            </div>
            <form action="/recipes/?{search}" method="get">
                <div class="my-10 flex justify-center items-center">
                    <div class="bg-gray-100 w-[50%] flex items-center py-3 rounded-3xl shadow">
                        <i class="fa-solid fa-magnifying-glass px-3 text-orange-500"></i>
                        <input type="text" name="search" placeholder="Search..." class="block  bg-transparent flex-1
                        outline-none">
                    </div>
                    <input type="submit" value="Search" class="w-[70px] text-sm h-[48px] lg:w-[120px] bg-orange-500 ml-3
                                text-white
                                rounded-3xl
                                cursor-pointer
                                ">


                </div>
            </form>


            <div class="">
                @if(count($recipes) > 0)
                    <div class="grid grid-cols-1 lg:grid-cols-5 my-10">
                        @foreach($recipes as $recipe)

                            <div class="rounded-xl shadow-md overflow-hidden m-2">
                                <div  style="background-image: url('/uploads/recipes/{{$recipe->img }}')"
                                      class="w-full h-[190px] bg-cover bg-center">
{{--                                    <img src={{ asset('uploads/recipes/' . $recipe->img) }} alt=""--}}
{{--                                         class="">--}}
                                </div>
                                <div class="py-4 px-2">
                                    <h3 class="text-xl font-medium">{{ $recipe->title }}</h3>
                                    <p class="text-gray-600 text-sm my-1.5 text-nowrap text-ellipsis overflow-hidden">
                                        {{ $recipe->description }}
                                    </p>
                                    <a href="/recipe/{{ $recipe->id }}" class="block bg-orange-500 max-w-[120px] rounded-md
                                text-sm
                                text-white
                            my-3
                            py-2.5
                            text-center ">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                @else
                    <div class="h-[40vh] flex items-center justify-center">
                        <div class="text-3xl font-bold">Recipes not exists</div>
                    </div>
                @endif


            </div>
        </div>
    </div>
</div>
