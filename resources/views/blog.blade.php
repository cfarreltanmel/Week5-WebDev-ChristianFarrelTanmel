<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50/50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
    <title>{{ $Nama }} - Portfolio</title>
</head>

<body class="min-h-screen flex flex-col font-sans text-slate-800 antialiased bg-white">

    <header class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between relative"
            aria-label="Main navigation">

            <a href="/"
                class="flex items-center gap-3 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md">
                <img src="{{ asset('img/CftLogo.png') }}" alt="CFT Logo" class="h-10 w-auto object-contain" />
            </a>

            <div id="collapseMenu"
                class="hidden lg:flex max-lg:absolute max-lg:top-full max-lg:left-0 max-lg:w-full max-lg:bg-white max-lg:border-b max-lg:border-slate-100 max-lg:p-6 max-lg:shadow-lg flex-col lg:flex-row items-start lg:items-center space-y-4 lg:space-y-0 lg:space-x-8 text-sm font-medium text-slate-600">
                <a href="/" class="hover:text-blue-700 transition-colors">Home</a>
                <a href="/about" class="hover:text-blue-600 transition-colors">About</a>
                <a href="/blog" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors"
                    aria-current="page">Blog</a>
                <a href="/contact" class="hover:text-blue-600 transition-colors">Contact</a>
            </div>

            <button type="button" aria-controls="collapseMenu" aria-expanded="false" id="toggleOpen"
                class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </nav>
    </header>

    <main class="grow flex items-center justify-center py-20 px-6">
        <div class="max-w-4xl mx-auto text-center flex flex-col items-center">

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 text-center mb-12 tracking-tight">
                Blog
            </h1>

            <article class="text-lg md:text-xl text-slate-600 font-normal max-w-2xl mb-8 leading-relaxed">
                Selamat datang di blog saya! Di sini, saya berbagi berbagai artikel yang mungkin berguna untuk
                pengembangan website/aplikasi menggunakan laravel.
            </article>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
                <div class="bg-white rounded-lg shadow-md p-6 border border-slate-100">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">Routing</h2>
                    <p class="text-sm text-slate-500 mb-4">Tanggal: 23 Oktober 2026</p>
                    <p class="text-slate-700">Penjelasan tentang cara kerja routing di Laravel dan bagaimana mengatur
                        rute untuk aplikasi Anda.</p>
                    <a href="https://laravel.com/framework/docs/routing"
                        class="mt-4 inline-block text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 border border-slate-100">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">Blade Templates</h2>
                    <p class="text-sm text-slate-500 mb-4">Tanggal: 24 Oktober 2026</p>
                    <p class="text-slate-700">Informasi dan tutorial mengenai penggunaan Blade templating engine di
                        Laravel.</p>
                    <a href="https://laravel.com/framework/docs/blade"
                        class="mt-4 inline-block text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>

            </div>
        </div>
    </main>

    <footer class="bg-slate-300 border-t border-slate-100 py-12 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 text-center max-w-2xl mx-auto">
                <div>
                    <h3 class="text-xs font-semibold text-slate-600 uppercase tracking-wider mb-4">Navigation</h3>
                    <ul class="space-y-2.5 text-sm font-medium text-slate-500">
                        <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                        <li><a href="/about" class="hover:text-blue-600 transition-colors">About</a></li>
                        <li><a href="/blog" class="hover:text-blue-600 transition-colors">Blog</a></li>
                        <li><a href="/contact" class="hover:text-blue-600 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-semibold text-slate-600 uppercase tracking-wider mb-4">Quick Links</h3>
                    <ul class="space-y-2.5 text-sm font-medium text-slate-500">
                        <li><a href="https://github.com/cfarreltanmel" target="_blank" rel="noopener noreferrer"
                                class="hover:text-blue-600 transition-colors">GitHub</a></li>
                        <li><a href="https://www.instagram.com/chrisfata_" target="_blank" rel="noopener noreferrer"
                                class="hover:text-blue-600 transition-colors">Instagram</a></li>
                        <li><a href="https://www.youtube.com/nba" target="_blank" rel="noopener noreferrer"
                                class="hover:text-blue-600 transition-colors">YouTube</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-black">
                <p class="text-sm text-slate-500 text-center">
                    © {{ date('Y') }} Christian Farrel Tanmel. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>
