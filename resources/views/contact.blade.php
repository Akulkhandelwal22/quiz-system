<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Quiz System</title>
    @vite('resources/css/app.css')
    <style>
        /* Matching your system's specific aesthetic */
        .system-bg { background-color: #f4f7f6; }
        .text-navy { color: #483D8B; }
        .text-green-system { color: #1a5632; }
        
        .contact-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            border: 1px solid #eef2f1;
        }

        .input-field {
            background-color: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 30px; /* Matches your search bar */
            padding: 12px 25px;
            transition: all 0.3s ease;
            width: 100%;
            outline: none;
        }

        .input-field:focus {
            border-color: #1a5632;
            box-shadow: 0 0 0 3px rgba(26, 86, 50, 0.1);
        }

        .btn-send {
            background-color: #1a5632;
            color: white;
            font-weight: 600;
            padding: 12px 40px;
            border-radius: 30px;
            transition: transform 0.2s, background 0.3s;
            cursor: pointer;
            border: none;
        }

        .btn-send:hover {
            background-color: #144527;
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="system-bg flex flex-col min-h-screen">
    <x-user-navbar></x-user-navbar>

    <main class="flex grow items-center justify-center py-12 px-4">
        <div class="max-w-4xl w-full grid md:grid-cols-2 gap-0 contact-card overflow-hidden">
            
            <div class="bg-gray-900 p-10 text-white flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
                <p class="text-gray-400 mb-8">
                    Have a question about a quiz? Or perhaps a suggestion for a new category? We’d love to hear from you.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <span class="text-2xl">📧</span>
                        <div>
                            <p class="text-sm text-gray-400">Email us at</p>
                            <p class="font-medium">support@quizsystem.com</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-2xl">📍</span>
                        <div>
                            <p class="text-sm text-gray-400">Based in</p>
                            <p class="font-medium">India</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-10">
                <h3 class="text-2xl font-bold text-navy mb-6 text-center md:text-left">Send a Message</h3>
                
                <form action="{{route('contact.send')}}" method="Post" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2 ml-4">Your Name</label>
                        <input type="text" name="name" class="input-field" placeholder="Enter your name" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2 ml-4">Email Address</label>
                        <input type="email" name="email" class="input-field" placeholder="example@mail.com" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2 ml-4">Message</label>
                        <textarea name="message" rows="4" class="input-field rounded-2xl" placeholder="How can we help you?" required></textarea>
                    </div>

                    <div class="text-center md:text-left pt-2">
                        <button type="submit" class="btn-send shadow-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <x-footer-user></x-footer-user>
</body>
</html>