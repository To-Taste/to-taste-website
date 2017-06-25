<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

class RecipeController extends Controller
{
    //
    public function index() {
        $recipes = Recipe::all();

        return view('recipe.index', compact('recipes'));
    }

    public function create() {
        return view('recipe.create');

    }

    public function show(Recipe $recipe)
    {

        return view('recipe.view', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
        return view('recipe.editor',compact('recipe'));
    }

    public function store($id = 0) {
      //  dd(request('id'));

       if(request('id') != 0) {
           $id = request('id');
       }

        $this->validate(request(),[
            'headline' => 'required',
            'recipeIntro' => 'required',
            'recipeIngredients' => 'required',
            'recipeSteps' => 'required'
        ]);

        Recipe::updateOrCreate(['id' => $id],[
            'headline' => request('headline'),
            'recipeIntro' => request('recipeIntro'),
            'recipeIngredients' => request('recipeIngredients'),
            'recipeSteps' => request('recipeSteps'),
            'recipeClosing' => request('recipeClosing')
        ]);

        return redirect('/recipes');
    }

    public function delete($id = 0) {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/recipes');

    }


}
