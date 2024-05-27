<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# Method 1
// Route::get("blog", [BlogController::class,"index"])->name("blog.index");
// Route::get("blog/create", [BlogController::class,"create"])->name("blog.create");
// Route::post("blog", [BlogController::class,"store"])->name("blog.store");
// Route::get("blog/{blogId}", [BlogController::class,"show"])->name("blog.show");
// Route::get("blog/{blogId}/edit", [BlogController::class,"edit"])->name("blog.edit");
// Route::put("blog/{blogId}", [BlogController::class,"update"])->name("blog.update");
// Route::delete("blog/{blogId}", [BlogController::class,"destroy"])->name("blog.destroy");


# Method 2
Route::resource("blog", BlogController::class);

