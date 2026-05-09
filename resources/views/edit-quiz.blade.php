{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Quiz Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>

    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

            <h2 class="text-2xl text-center text-gray-800 mb-6">Edit Quiz</h2>

            @if(session('quiz'))
                <div class="text-green-500 mb-2">
                    {{ session('quiz') }}
                </div>
            @endif

            <form action="/update-quiz" method="post" class="space-y-4 align-center">
                @csrf

                <div>
                    <input
                        type="text"
                        placeholder="Enter Quiz name"
                        required
                        name="quiz"
                        value="{{ old('quiz', $quiz->name) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"
                    >
                    @error('quiz')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <select
                        name="category_id"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"
                    >
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $quiz->category_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">
                    Save Changes
                </button>
            </form>

            <div class="mt-6">
                <span class="text-green-500 font-bold">Quiz : {{ $quiz->name }}</span>
                <p class="text-green-500 font-bold">
                    Total Questions : {{ $totalMCQs }}
                    @if($totalMCQs > 0)
                        <a class="text-yellow-500 text-sm ml-2"
                           href="{{ url('show-quiz/'.$quiz->id) }}">
                            Show Ques
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
</body>
</html> --}}