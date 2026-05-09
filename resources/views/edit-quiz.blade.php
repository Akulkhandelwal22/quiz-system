<!DOCTYPE html>
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

            <form action="{{ url('/update-quiz/'.$quiz->id) }}" method="post" class="space-y-4">
                @csrf

                <div>
                    <input type="text"
                           placeholder="Enter Quiz name"
                           required
                           name="quiz"
                           value="{{ old('quiz', $quiz->name) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    @error('quiz')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <select name="category_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
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

                {{-- Hidden field controlled by JS/buttons --}}
                <input type="hidden" name="action_type" id="action_type" value="back-list">

                <div class="space-y-2">
                    {{-- Save and go back to quiz list --}}
                    <button type="submit"
                            onclick="document.getElementById('action_type').value='back-list'"
                            class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">
                        Save & Go to Quiz List
                    </button>

                    {{-- Save and then add MCQs --}}
                    <button type="submit"
                            onclick="document.getElementById('action_type').value='add-mcqs'"
                            class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">
                        Save & Add MCQs
                    </button>
                </div>
            </form>
            <div class="mt-4 space-y-2">
                <a href="{{ url('edit-mcqs/'.$quiz->id) }}"
                   class="w-full bg-red-500 block text-center rounded-xl px-4 py-2 text-white">
                    Edit Existing MCQs
                </a>
            </div>

            <div class="mt-6 text-sm text-gray-600">
                Total Questions: {{ $totalMCQs }}
                @if($totalMCQs > 0)
                    <a class="text-yellow-500 ml-2"
                       href="/show-quiz/{{$quiz->id}}/{{str_replace(' ','-',$quiz->name)}}">
                        Show Questions
                    </a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>