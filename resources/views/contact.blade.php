<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
    <title>Document</title>
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
                <a href="/blog" class="hover:text-blue-600 transition-colors">Blog</a>
                <a href="/contact" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors"
                    aria-current="page">Contact</a>
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

    <main class="grow flex items-center justify-center py-16 px-6 bg-slate-50/50">
        <div class="w-full max-w-xl mx-auto">

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 text-center mb-10 tracking-tight">
                Send a Message
            </h1>

            <div class="bg-white rounded-2xl p-8 md:p-10 shadow-sm border border-slate-100">
                <form action="contact" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="nama" class="block text-sm font-medium text-slate-600 mb-2">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama" name="nama" pattern=".*\S.*"
                            placeholder="Masukkan nama lengkap Anda" required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">
                            Alamat Email
                        </label>
                        <input type="email" id="email" name="email" pattern=".*\S.*"
                            placeholder="nama@email.com" required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400">
                    </div>

                    <div>
                        <label for="pesan" class="block text-sm font-medium text-slate-600 mb-2">
                            Pesan
                        </label>
                        <textarea id="pesan" name="pesan" onblur="this.value = this.value.trim()" rows="5"
                            placeholder="Tuliskan pesan Anda di sini..." required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400 resize-y"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm shadow-sm hover:shadow transition-all duration-150 active:scale-[0.99] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Kirim Pesan
                        </button>
                    </div>

                </form>
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
