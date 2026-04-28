<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin-login','admin-login');

Route::post('admin-login',[Admincontroller::class,'login']);

Route::get('dashboard',[Admincontroller::class,'dashboard']);
Route::get('admin-categories',[Admincontroller::class,'categories']);
Route::get('admin-logout',[Admincontroller::class,'logout']);
Route::post('add-category',[Admincontroller::class,'addCategory']);
Route::get('category/delete/{id}',[Admincontroller::class,'deleteCategory']);
Route::get('add-quiz',[Admincontroller::class,'addQuiz']);
Route::post('add-mcqs',[Admincontroller::class,'addMCQs']);
Route::get('end-quiz',[Admincontroller::class,'endQuiz']);
Route::get('show-quiz/{id}',[Admincontroller::class,'showQuiz']);

