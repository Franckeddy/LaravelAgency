<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Agency</title>
    @vite('resources/css/app.css')
</head>
<body>

@include('web.header')

    <div class="bg-white">
        <main class="mx-auto px-4 sm:px-6 lg:px-8">
            <section aria-labelledby="products-heading" class="pb-24 pt-6">
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    @if(\Route::current()->getName() !== 'login')
                    <form class="hidden lg:block" method="GET">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                            <li>
                                <input type="number" placeholder="Budget max" name="price" value="{{ $input['price'] ?? ''}}">
                            </li>
                            <li>
                                <input type="number" placeholder="Surface minimum" name="surface" value="{{ $input['surface'] ?? ''}}">
                            </li>
                            <li>
                                <input type="number" placeholder="Nombre de pièces" name="rooms" value="{{ $input['rooms'] ?? ''}}">
                            </li>
                            <li>
                                <input type="text" placeholder="Mot clef" name="title" value="{{ $input['title'] ?? ''}}">
                                <button class="block rounded-lg bg-indigo-600 mt-2.5 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring">
                                    Rechercher
                                </button>
                            </li>
                        </ul>
                    </form>
                    @endif
                    <div class="lg:col-span-3">
                        @yield('content-property')
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>

</html>
