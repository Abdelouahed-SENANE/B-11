@extends('layouts.Layout')

@include('components.navigation')
<div class="">
    <div class="">
        <div style="background-image: url('/images/recipe.jpg')" class="text-center relative h-[300px] bg-cover
        bg-center
        bg-[url('/images/recipe.jpg')] flex
        justify-center
        items-center">
            <div class="bg-black/50 absolute left-0 right-0 w-full h-full"></div>
            <div class="relative text-white">
                <span class="tracking-widest font-medium block my-2 text-green-500">READ THE DETAILS</span>

                <h1 class="text-5xl font-medium">Single Recipe</h1>
                <p class="w-[400px] py-5">Discover a community-driven culinary experience with our
                    user-contribute
                    recipes
                    section.
                </p>
            </div>
        </div>
        <div class="container mx-auto w-[70%]">
            <div class=" my-10 py-5 ">
                <div class="flex items-start">
                    <div class="flex-1  ">
                        <div>
                            <img src={{ asset('uploads/recipes/' . $recipe->img) }} alt="" class=" rounded">
                        </div>
                        <div class="my-5">
                            <div class="flex items-center justify-between gap-2 text-gray-600 my-5">
                                <div>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>
                                        {{ $recipe->created_at->format('Y-m-d') }}
                                    </span>
                                </div>
                                <div>
                                    <a href="/update/{{ $recipe->id }} ">
                                        <button class="bg-green-500 text-white px-2 py-2 rounded-3xl ">
                                            <i class="fa-solid fa-arrow-rotate-right"></i>
                                        </button>
                                    </a>
                                    <a href="/delete/{{ $recipe->id }} ">
                                        <button class="bg-rose-500 text-white px-2 py-2 rounded-3xl ">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <h2 class="text-4xl font-semibold">{{ $recipe->title }}</h2>
                            <p class="my-4">
                                {{ $recipe->description }}
                            </p>
                        </div>
                    </div>
                    <div class="min-w-[200px] ml-5">
                        <div>
                            <h3 class="text-2xl font-medium my-3">Recent Recipes</h3>
                            <ul class="">
                                @foreach($lastest_recipes as $last_recipe)

                                    <li class="my-2">
                                        <a href="/recipe/{{ $last_recipe->id }}" class="text-gray-500 hover:text-black
                                        ">{{
                                        $last_recipe->title }}</a>
                                    </li>
                                @endforeach



                            </ul>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium my-3">Categories</h3>
                            <ul class=" ">
                                @foreach($categories as $categorie)
                                    <li class="my-2 flex items-center gap-1">
                                        <span  class="bg-gray-100 text-black block rounded-3xl w-fit px-5 py-1.5">{{
                                        $categorie->name
                                        }}
                                        </span>
                                    </li>

                                @endforeach




                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
