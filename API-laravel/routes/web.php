<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('recipes', RecipeController::class);
Route::get('recipes', [RecipeController::class, 'index']);

Route::get('/random', function () {
    return view('random');
});
// routes/web.php

use App\Http\Controllers\FoodPictureController;

Route::get('/food-picture', [FoodPictureController::class, 'show'])->name('food-picture.show');
Route::get('/food-picture/random', [FoodPictureController::class, 'getRandomPicture'])->name('food-picture.random');
Route::post('/food-picture/random', [FoodPictureController::class, 'changePicture'])->name('food-picture.change');
Route::get('/food-picture/{id}', [FoodPictureController::class, 'getPicture'])->name('food-picture.get');
