<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Blogs;
use App\Models\BlogTags;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth"])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard", [
            "title" => "Dashboard"
        ]);
    }); 
    
    Route::get("/dashboard/users", function () {
        return view("dashboard.users.main", [
            "title" => "Users"
        ]);
    });
});

Route::middleware(["web"])->group(function () {

    Route::get('/', [HomeController::class, "home"]);
    Route::get('/login', [AuthController::class, "loginView"])->name("login");

});
