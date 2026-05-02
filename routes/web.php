<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;

Route::get('/',[Usercontroller::class,'welcome']);
Route::get('user-quiz-list/{id}/{category}',[Usercontroller::class,'userQuizList']);
Route::get('start-quiz/{id}/{name}',[Usercontroller::class,'startQuiz']);
Route::view('user-signup','user-signup');
Route::post('user-signup',[Usercontroller::class,'userSignup']);
Route::get('user-logout',[Usercontroller::class,'userLogout']);
Route::get('user-signup-quiz',[Usercontroller::class,'userSignupQuiz']);
Route::view('user-login','user-login');
Route::post('user-login',[Usercontroller::class,'userLogin']);
Route::get('user-login-quiz',[Usercontroller::class,'userLoginQuiz']);




// <------------------------------------------------------------------------>

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
Route::get('show-quiz/{id}/{quizName}',[Admincontroller::class,'showQuiz']);
Route::get('quiz-list/{id}/{category}',[Admincontroller::class,'quizList']);

