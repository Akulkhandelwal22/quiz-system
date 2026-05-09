<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Contactcontroller;

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.send');

Route::get('/',[Usercontroller::class,'welcome']);
//Route::view('user-signup','user-signup');
Route::post('user-signup',[Usercontroller::class,'userSignup']);
Route::get('user-logout',[Usercontroller::class,'userLogout']);
Route::get('user-signup-quiz',[Usercontroller::class,'userSignupQuiz']);
Route::get('categories-list',[UserController::class,'categories']);
Route::get('certificate',[UserController::class,'certificate']);
Route::get('download-certificate',[UserController::class,'downloadCertificate']);
Route::view('about',[Usercontroller::class,'about']);
Route::view('contact',[Usercontroller::class,'contact']);

Route::get('user-login',function(){
    if(!session()->has('user')){
       return view('user-login');
    }else{
        return redirect('/');
    }
});
Route::get('user-signup',function(){
    if(!session()->has('user')){
       return view('user-signup');
    }else{
        return redirect('/');
    }
});

//Route::view('user-login','user-login');
Route::post('user-login',[Usercontroller::class,'userLogin']);
Route::get('user-login-quiz',[Usercontroller::class,'userLoginQuiz']);
Route::get('quiz-search',[Usercontroller::class,'searchQuiz']);
Route::get('verify-user/{email}',[Usercontroller::class,'verifyUser']);
Route::view('user-forgot-password','user-forgot-password');
Route::post('user-forgot-password',[UserController::class,'userForgotPassword']);
Route::get('user-forgot-password/{email}',[UserController::class,'userResetForgotPassword']);
Route::post('user-set-forgot-password',[UserController::class,'userSetForgotPassword']);


Route::middleware('CheckUserAuth')->group(function(){
    Route::get('mcq/{id}/{name}',[Usercontroller::class,'mcq']);
    Route::get('submit-next/{id}',[Usercontroller::class,'submitAndNext']);
    Route::get('user-details',[Usercontroller::class,'userDetails']);
    Route::get('user-quiz-list/{id}/{category}',[Usercontroller::class,'userQuizList']);
    Route::get('start-quiz/{id}/{name}',[Usercontroller::class,'startQuiz']);

});


// <-------------------------------------------------------------------------------------------------->

Route::view('admin-login','admin-login');
Route::post('admin-login',[Admincontroller::class,'login']);
// Route::get('edit-quiz/{id}', [Admincontroller::class, 'editQuiz']);
// Route::post('update-quiz/{id}', [Admincontroller::class, 'updateQuiz']);

Route::middleware('CheckAdminAuth')->group(function(){
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
});
