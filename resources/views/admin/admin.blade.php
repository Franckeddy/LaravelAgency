<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Administration</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="dashboard">
    @include('component.aside')

    @include('component.header')

    <main class="content-wrap">

        @if(session('success'))
            <div role="alert" class="rounded border-s-4 border-green-500 bg-red-50 p-4">
                <strong class="block font-medium text-green-800"> Success </strong>
                <p class="mt-2 text-sm text-green-700">{{ session('success') }}</p>
            </div>
        @endif

        @if($errors->any())
                <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
                    <strong class="block font-medium text-red-800"> Something went wrong </strong>
                    @foreach($errors->all() as $error)
                        <p class="mt-2 text-sm text-red-700">{{ $error }}</p>
                    @endforeach
                </div>
        @endif

        @yield('content')
    </main>
</div>

</body>
</html>
