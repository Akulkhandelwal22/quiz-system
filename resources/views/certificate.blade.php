<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certificate</title>
    @vite('resources/css/app.css')
</head>
<body class="pt-10 text-center">
<a class="text-green-500 font-bold" href="/">Download</a>
    <div class="w-200 border-4 m-10 bg-gray-100 border-indigo-900 p-10 text-center">
    <h1 class="text-5xl flex">
        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="m385-412 36-115-95-74h116l38-119 37 119h117l-95 74 35 115-94-71-95 71ZM244-40v-304q-45-47-64.5-103T160-560q0-136 92-228t228-92q136 0 228 92t92 228q0 57-19.5 113T716-344v304l-236-79-236 79Zm420.5-335.5Q740-451 740-560t-75.5-184.5Q589-820 480-820t-184.5 75.5Q220-669 220-560t75.5 184.5Q371-300 480-300t184.5-75.5ZM304-124l176-55 176 55v-171q-40 29-86 42t-90 13q-44 0-90-13t-86-42v171Zm176-86Z"/></svg>
            <span>Certificate Of Completion</span>
    </h1>
    <p class="text-2xl mt-5">This is to clarify that</p>
    <h2 class="text-4xl">Anil Singh</h2>
    <p class="text-2xl mt-3">has Succesfully Completed the</p>
    <h3 class="text-3xl">Coding Quiz</h3>
    <p class="text-2xl mt-5">{{date('y-m-d')}}</p>
    </div>
</body>
</html>