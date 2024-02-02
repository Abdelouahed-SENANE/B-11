<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('/create', ['categories' => $categories]);
    }
    public function resizeImage()
    {
        return view('resizeImage');
    }

    public function store(Request $request)
    {
        $recipe = new Recipe();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $destination = public_path('uploads/recipes/');
            $file->move($destination, $filename);
            $recipe->img = $filename;
            $recipe->title = $request->input('name');
            $recipe->ingredient = $request->input('ingts');
            $recipe->description = $request->input('desc');
            $recipe->category_id = $request->input('category_id');
            $recipe->save();


        }

        return redirect('/recipes')->with('message', 'Thanks for your Recipe');
    }

    public function recipes()
    {

        $recipes = Recipe::latest();

        if (request('search')) {
            $recipes->where('title', 'like', '%' . request('search') . '%')->orwhere('description', 'like', '%' .
                request('search') . '%');
        }
        return view('recipes', ['recipes' => $recipes->get()]);
    }

    public function singleRecipe($id)
    {
        $recipe = Recipe::find($id);
        $categories = Category::latest()->take(5)->get();
        $latest_recipes = Recipe::latest()->take(5)->get();
        return view('/recipe', ['recipe' => $recipe, 'lastest_recipes' =>
                $latest_recipes, 'categories' => $categories]
        );
    }

    public function delete($id)
    {

        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes')->with('message', 'Recipe Deleted Successfully');

    }

    public function update($id)
    {

        $recipe = Recipe::find($id);
        $categories = Category::all();

        return view('update', ['recipe' => $recipe, 'categories' => $categories]);
    }

    public function saveRecord($id)
    {
        $recipe = Recipe::find($id);
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/recipes', $filename);
            $recipe->img = $filename;
            $recipe->title = request()->input('title');
            $recipe->ingredient = request()->input('ingts');
            $recipe->description = request()->input('desc');
            $recipe->save();

        }

        return redirect('/recipes')->with('message', 'Thanks for your Recipe');


    }


}
