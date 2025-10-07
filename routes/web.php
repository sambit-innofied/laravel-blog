<?php

use App\Http\Controllers\HomeController;
use App\Models\Blogs;
use App\Models\BlogTags;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Route;



Route::middleware(["web"])->group(function () {

    Route::get('/', [HomeController::class, "home"]);
    
});
