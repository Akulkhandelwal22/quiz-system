<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class= "bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadown-lg max-w-full">
        <h2 class="text-2xl text-center text-gray-800 mb-6">User Login</h2>
        @error('user')
        <div class="text-blue-500">{{$message}}</div>
        @enderror 
        <form action="/user-login" method="post" class="space-y-4">
            @csrf
            <div>
                <lable for="" class="text-gray-600 mb-1">User Email</lable>
                <input type="email" placeholder="Enter Email" name="email"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                ></input>
            @error('email')
            <div class="text-red-500">{{$message}}</div>
            @enderror 
            </div>
            <div>
                <lable for="" class="text-gray-600 mb-1">User Password</lable>
                <input type="password" placeholder="Enter Password" name="password"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl"></input>
            @error('password')
            <div class="text-red-500">{{$message}}</div>
            @enderror 
            </div>
            <button type="submit" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">Login</button>

        </form>
    </div>
</div>
</body>
</html>