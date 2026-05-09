<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit MCQs</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>

    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-3xl">
            <h2 class="text-2xl text-center text-gray-800 mb-6">
                Edit MCQs for: {{ $quiz->name }}
            </h2>

            @if(session('mcqs'))
                <div class="text-green-500 mb-4">
                    {{ session('mcqs') }}
                </div>
            @endif

            <form action="{{ url('update-mcqs/'.$quiz->id) }}" method="post" class="space-y-6">
                @csrf

                @foreach($mcqs as $index => $mcq)
                    <div class="border border-gray-200 rounded-xl p-4 space-y-3">
                        <input type="hidden" name="mcqs[{{ $index }}][id]" value="{{ $mcq->id }}">
                        <div>
                            <label class="block text-sm font-semibold mb-1">
                                Question {{ $index + 1 }}
                            </label>
                            <textarea name="mcqs[{{ $index }}][question]"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">{{ old("mcqs.$index.question", $mcq->question) }}</textarea>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block text-sm mb-1">Option A</label>
                                <input type="text"
                                       name="mcqs[{{ $index }}][a]"
                                       value="{{ old("mcqs.$index.a", $mcq->a) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm mb-1">Option B</label>
                                <input type="text"
                                       name="mcqs[{{ $index }}][b]"
                                       value="{{ old("mcqs.$index.b", $mcq->b) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm mb-1">Option C</label>
                                <input type="text"
                                       name="mcqs[{{ $index }}][c]"
                                       value="{{ old("mcqs.$index.c", $mcq->c) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm mb-1">Option D</label>
                                <input type="text"
                                       name="mcqs[{{ $index }}][d]"
                                       value="{{ old("mcqs.$index.d", $mcq->d) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm mb-1">Correct Answer</label>
                            <select name="mcqs[{{ $index }}][correct_ans]"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-xl focus:outline-none">
                                <option value="a" {{ $mcq->correct_ans == 'a' ? 'selected' : '' }}>A</option>
                                <option value="b" {{ $mcq->correct_ans == 'b' ? 'selected' : '' }}>B</option>
                                <option value="c" {{ $mcq->correct_ans == 'c' ? 'selected' : '' }}>C</option>
                                <option value="d" {{ $mcq->correct_ans == 'd' ? 'selected' : '' }}>D</option>
                            </select>
                        </div>
                    </div>
                @endforeach

                <button type="submit"
                        class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">
                    Save All Changes
                </button>
            </form>
        </div>
    </div>
</body>
</html>