<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="dashboard">
    @include('component.aside')

    @include('component.header')

    <main class="content-wrap">

    @include('shared.flash')

        @yield('content')
    </main>
</div>

</body>

<script>
    new TomSelect('select[multiple]' , {
        plugins: {
            remove_button: {
                title: 'Supprimer',
            }
        }
    })
</script>

</html>
