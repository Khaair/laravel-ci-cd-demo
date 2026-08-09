<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CI/CD Demo</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white">

<div class="min-h-screen flex items-center justify-center px-6">

    <div class="max-w-5xl w-full">

        <!-- Card -->
        <div class="bg-slate-900 rounded-3xl shadow-2xl border border-slate-800 p-10 md:p-16">

            <!-- Badge -->
            <div class="flex justify-center">
                <span class="px-4 py-2 rounded-full bg-emerald-500/20 text-emerald-400 text-sm font-semibold border border-emerald-500/30">
                    🚀 Production Ready
                </span>
            </div>

            <!-- Title -->
            <h1 class="mt-8 text-center text-5xl md:text-6xl font-bold">
                Laravel CI/CD Demo
            </h1>

            <p class="mt-6 text-center text-slate-400 max-w-2xl mx-auto leading-8">
                A production-ready Laravel application running inside Docker with
                MySQL and Nginx. Automated build, test and deployment using
                GitHub Actions.
            </p>

            <!-- Technologies -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-14">

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">🐳</div>
                    <p class="mt-3 font-semibold">Docker</p>
                </div>

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">⚙️</div>
                    <p class="mt-3 font-semibold">Laravel</p>
                </div>

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">🗄️</div>
                    <p class="mt-3 font-semibold">MySQL</p>
                </div>

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">🌐</div>
                    <p class="mt-3 font-semibold">Nginx</p>
                </div>

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">🚀</div>
                    <p class="mt-3 font-semibold">GitHub Actions</p>
                </div>

                <div class="bg-slate-800 rounded-xl p-6 text-center hover:bg-slate-700 transition">
                    <div class="text-4xl">📦</div>
                    <p class="mt-3 font-semibold">Docker Hub</p>
                </div>

            </div>

            <!-- Buttons -->
            <div class="mt-14 flex flex-col sm:flex-row justify-center gap-4">

                <a href="/blogs"
                   class="px-8 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 font-semibold transition">
                    Blogs
                </a>

                <a href="#"
                   class="px-8 py-3 rounded-xl border border-slate-700 hover:border-emerald-500 hover:text-emerald-400 transition">
                    View Repository
                </a>

                <a href="#"
                   class="px-8 py-3 rounded-xl border border-slate-700 hover:border-emerald-500 hover:text-emerald-400 transition">
                    GitHub Actions
                </a>

            </div>

            <!-- Footer -->
            <div class="mt-12 pt-8 border-t border-slate-800">

                <div class="flex flex-wrap justify-center gap-3 text-sm">

                    <span class="px-3 py-1 rounded-full bg-slate-800">Laravel 13</span>
                    <span class="px-3 py-1 rounded-full bg-slate-800">Docker</span>
                    <span class="px-3 py-1 rounded-full bg-slate-800">MySQL</span>
                    <span class="px-3 py-1 rounded-full bg-slate-800">Nginx</span>
                    <span class="px-3 py-1 rounded-full bg-slate-800">GitHub Actions</span>

                </div>

                <p class="text-center text-slate-500 mt-8">
                    Built with ❤️ for Docker & CI/CD Learning
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>