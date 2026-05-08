<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Quiz System</title>
    @vite('resources/css/app.css')
    <style>
        /* Matching your dashboard colors */
        .text-system-green { color: #1a5632; }
        .bg-system-light { background-color: #f4f7f6; }
        .title-font { font-weight: 700; letter-spacing: -0.5px; }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="bg-system-light">
    <x-user-navbar />

    <div class="max-w-6xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <h1 class="text-system-green text-5xl title-font mb-6">Master Any Subject</h1>
            <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                From academic fundamentals and professional certifications to fun trivia for kids, 
                our platform is built to test your knowledge across <strong>every possible domain</strong>.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-20">
            <div class="feature-card text-center">
                <div class="text-4xl mb-4">🌍</div>
                <h3 class="text-xl font-bold mb-2">Unlimited Topics</h3>
                <p class="text-gray-500">Whether it's History, Science, Programming, or General Knowledge, we have a quiz for it.</p>
            </div>
            <div class="feature-card text-center">
                <div class="text-4xl mb-4">🎓</div>
                <h3 class="text-xl font-bold mb-2">For All Ages</h3>
                <p class="text-gray-500">Tailored content ranging from school-level basics to advanced industry standards.</p>
            </div>
            <div class="feature-card text-center">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-2">Instant Insight</h3>
                <p class="text-gray-500">Get immediate results and track your progress as you master new categories.</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Philosophy</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We believe that testing is one of the most effective ways to learn. By attempting quizzes, 
                        you aren't just checking what you know—you're reinforcing your memory and discovering new interests.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our system is designed to be lightweight, fast, and accessible on any device, 
                        ensuring that your next learning milestone is always just a click away.
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl border-l-4 border-green-700">
                    <h4 class="font-bold text-green-900 mb-2">Ready to start?</h4>
                    <p class="text-sm text-green-800 mb-6">Choose a category from your dashboard and challenge yourself today.</p>
                    <a href="/" class="inline-block bg-green-800 text-white px-8 py-3 rounded-full font-bold hover:bg-green-700 transition">
                        Browse All Quizzes
                    </a>
                </div>
            </div>
        </div>
    </div>
<x-footer-user></x-footer-user>
</body>
</html>