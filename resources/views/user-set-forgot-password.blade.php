{{-- <h1>
    forgot password
</h1>
<h1>{{$email}}</h1> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Signup</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class= "bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadown-lg max-w-full">
        <h2 class="text-2xl text-center text-gray-800 mb-6">User Set Password</h2>
        @error('user')
        <div class="text-blue-500">{{$message}}</div>
        @enderror 
        <form action="/user-set-forgot-password" method="post" class="space-y-4">
            @csrf
            <div>
                <input type="hidden" placeholder="Enter Email" value={{$email}} name="email"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                ></input>
            @error('email')
            <div class="text-red-500">{{$message}}</div>
            @enderror 
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">User Password</label>
                <input type="password" placeholder="Enter Password" name="password"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl"></input>
            @error('password')
            <div class="text-red-500">{{$message}}</div>
            @enderror 
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl"></input>
            </div>
            <button type="submit" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">Update Password</button>

        </form>
    </div>
</div>
</body>
</html>