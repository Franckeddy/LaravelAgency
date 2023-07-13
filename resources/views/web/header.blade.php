<header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                    Welcome Back, Barry!
                </h1>

                <p class="mt-1.5 text-sm text-gray-500">
                    Let's write a new blog post! 🎉
                </p>
            </div>

            <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
                <button
                    class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring"
                    type="button"
                >
                    <a href="{{ route('property.index') }}" class="text-sm font-medium"> Biens </a>

                </button>

                <button
                    class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
                    type="button"
                >
                    <a href="{{ route('home') }}" class="text-sm font-medium"> Acceuil </a>
                </button>
            </div>
        </div>
    </div>
</header>
