<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - MyWebsite</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MyWebsite</h1>

            <div class="flex gap-8">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="text-blue-600 font-semibold">About</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center">
        <div class="max-w-4xl mx-auto px-6 text-center">

            <p class="text-blue-600 font-semibold mb-3">
                ABOUT US
            </p>

            <h2 class="text-5xl font-bold mb-6">
                Mengenal <span class="text-blue-600">MyWebsite</span>
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed mb-10">
                MyWebsite merupakan sebuah platform digital yang dibuat
                untuk menyediakan solusi website modern, responsif,
                dan mudah digunakan.
            </p>

            <div class="grid md:grid-cols-3 gap-6 text-left">

                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold mb-2">Modern</h3>
                    <p class="text-gray-600">
                        Menggunakan desain modern dan minimalis.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold mb-2">Responsive</h3>
                    <p class="text-gray-600">
                        Dapat digunakan pada berbagai ukuran perangkat.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold mb-2">Professional</h3>
                    <p class="text-gray-600">
                        Tampilan dibuat sederhana dan profesional.
                    </p>
                </div>

            </div>

            <a href="/"
               class="inline-block mt-10 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Kembali ke Home
            </a>

        </div>
    </section>

</body>
</html>