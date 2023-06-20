<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function index()
    {
        // Fetch recipes from the Edamam API
        $apiKey = 'bc3a70c0da4886407849a9a7b25d69db';
        $appId = 'ca91d9f2';
        $recipeSearchUrl = 'https://api.edamam.com/api/recipes/v2?q=your_search_query&app_id=' . $appId . '&app_key=' . $apiKey;

        $response = Http::get($recipeSearchUrl);

        if ($response->successful()) {
            $recipes = $response->json()['hits'];

            // Store the recipes in the database
            foreach ($recipes as $recipeData) {
                $recipe = new Recipe();
                $recipe->name = $recipeData['recipe']['label'];
                $recipe->description = $recipeData['recipe']['source'];
                $recipe->image_url = $recipeData['recipe']['image'];
                $recipe->save();
            }
        } else {
            // Handle API error
            $error = $response->json()['error'];
            // ...
        }

        // Fetch recipes from the database
        $recipes = Recipe::all();

        return view('recipes.index', ['recipes' => $recipes]);
    }
}
