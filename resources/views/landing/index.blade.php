<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyWebsite</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MyWebsite</h1>

            <div class="flex gap-8">
                <a href="/" class="text-blue-600 font-semibold">Home</a>
                <a href="/about" class="hover:text-blue-600">About</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <p class="text-blue-600 font-semibold mb-3">
                    WELCOME
                </p>

                <h2 class="text-5xl font-bold leading-tight mb-6">
                    Build Your
                    <span class="text-blue-600">Digital Future</span>
                </h2>

                <p class="text-gray-600 text-lg mb-8">
                    Website modern untuk membantu kebutuhan digital
                    kamu dengan tampilan yang sederhana dan profesional.
                </p>

                <a href="/about"
                   class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Tentang Kami
                </a>
            </div>

            <div class="h-96 rounded-3xl overflow-hidden">
                <img src="{{ asset('images/pict.jpeg') }}"
                     alt="Portfolio perangkat digital"
                     class="w-full h-full object-cover">
            </div>

        </div>
    </section>

</body>
</html>