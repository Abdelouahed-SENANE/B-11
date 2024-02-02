@extends('layouts.Layout')

@include('components.navigation')

<div class="w-full h-[calc(100vh-72px)] flex items-center justify-center">
    <form action="/create" method="POST" class=" shadow-[rgba(255,165,0,_0.1)_0px_5px_20px] w-[600px] p-5 rounded" enctype="multipart/form-data">
        @csrf
        <h1 class="my-5 text-3xl font-bold text-center text-orange-500 uppercase tracking-wider">new recipe</h1>
        <div>
            <label for="">Title recipe</label>
            <input    required type="text" name="name" class="block bg-gray-100 w-full py-2.5 outline-none px-5 my-1.5
            rounded-3xl focus:ring-2 focus:ring-orange-300"
                   placeholder="Enter title">

        </div>
        <div class="my-4">
            <label for="">Ingredients recipe</label>
            <textarea rows="3" name="ingts"
                      class="block resize-none bg-gray-100 w-full my-1.5 rounded-lg px-5 outline-none py-2.5 focus:ring-2 focus:ring-orange-300"
                      placeholder="Enter ingredient"></textarea>
        </div>
        <div class="my-4">
            <label for="">Description recipe</label>
            <textarea   required rows="3" name="desc"
                      class="block resize-none bg-gray-100 w-full my-1.5 rounded-lg px-5 outline-none py-2.5 focus:ring-2 focus:ring-orange-300"
                      placeholder="Enter description"></textarea>
        </div>
        <div>
            <label for="category"></label>
            <select multiple  required name="categories[]" id="category" class="py-2.5 px-3 w-full bg-gray-100 text-sm
            rounded-xl
            outline-none
            focus:ring-2 focus:ring-orange-300">
                <option selected value="">Select category</option>
                @foreach($categories as $category)

                <option  value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input required type="file" name="image" id="" class="block file:bg-orange-500 file:py-2.5 file:px-4
            file:border-none file:text-white text-sm rounded-3xl rounded-tl-3xl rounded-bl-3xl
            w-full
            my-5 bg-gray-100">
        </div>
        <div class="flex items-center mt-6 justify-center">
            <input type="submit" value="Submit" class="block bg-orange-500 rounded-3xl text-white py-2.5 w-[180px]">
        </div>
    </form>
</div>
