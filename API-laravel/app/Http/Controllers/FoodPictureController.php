<?php

// app/Http/Controllers/FoodPictureController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodPictureController extends Controller
{
    public function show()
    {
        return view('food-picture');
    }

    public function getRandomPicture()
    {
        $recipeId = rand(1, 100000);
        $imageType = 'jpg';
        $size = '556x370';
        $imageUrl = "https://spoonacular.com/recipeImages/{$recipeId}-{$size}.{$imageType}";
        return response()->json(['imageUrl' => $imageUrl]);
    }

    public function changePicture(Request $request)
    {
        // Perform any necessary logic to fetch a new random image
        $recipeId = rand(1, 100000);
        $imageType = 'jpg';
        $size = '556x370';
        $imageUrl = "https://spoonacular.com/recipeImages/{$recipeId}-{$size}.{$imageType}";
        return response()->json(['imageUrl' => $imageUrl]);
    }
}

