<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Mcq;
use App\Models\User;


class Usercontroller extends Controller
{
    public function welcome() {
        $categories = Category::withCount('quizzes')->get();
        return view('welcome', ['categories' => $categories]);
    }
    function userQuizList($id,$category){
       $quizData = Quiz::withCount('Mcq')->where('category_id',$id)->get();
        return view('user-quiz-list',["quizData"=>$quizData,"category"=>$category]);
    }
    function startQuiz($id,$name){
        $quizCount = Mcq::where('quiz_id',$id)->count();
        $quizName = $name;
        return view('start-quiz',['quizName'=>$quizName,'quizCount'=>$quizCount]);
    }
    function userSignup(Request $request){
        $request->validate([
                "name"=>"required | min:3",
                "email"=>"required | email | unique:users",
                "password"=>"required | confirmed",
        ]);
        $user = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);
        if($user){
            Session::put('user',$user);
            if(Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');
                return redirect($url);
            }else {
            return redirect('/');
            }
        }
    }
    function userLogout() {
        Session::forget('user');
        return redirect('/');
    }
    function userSignupQuiz() {
        Session::put('quiz-url',url()->previous());
        return view('user-signup');
    }

    function userLogin(Request $request){
        $request->validate([
                "email"=>"required | email",
                "password"=>"required",
        ]);
        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)) {
            return "user not Valid";
        }
        if($user){
            Session::put('user',$user);
            if(Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');
                return redirect($url);
            }else {
            return redirect('/');
            }
        }
        
        function userLogout() {
            Session::forget('user');
            return redirect('/');
        }
        function userSignupQuiz() {
            Session::put('quiz-url',url()->previous());
            return view('user-signup');
        }
    }
    function userLoginQuiz(){
        Session::put('quiz-url',url()->previous());
        return view('user-login');
    }
}
