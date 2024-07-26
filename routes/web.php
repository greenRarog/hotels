<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;



use App\Http\Controllers\TryTestController;
Route::get("test", [TryTestController::class, 'test']);
Route::get("/index", function () {
	return view("project.index");
});

Route::get("/", function () {
	return view("project.main");
});
Route::get("/contacts", function () {
	return view("project.contacts");
});
