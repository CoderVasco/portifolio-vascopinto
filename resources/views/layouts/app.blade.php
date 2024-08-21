<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vasco Pinto - Desenvolvedor Full-stack especializado em soluções web. Explore projectos em desenvolvimento de software, consultoria TI e inovação tecnológica.">

    <title>@yield('title', 'Vasco Pinto - Desenvolvedor Full-stack.')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- <link rel="icon" href="public/img/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
</head>


<body>
    <div id="loading-screen">
        <div class="loading-content">
            <h1 class="loading-name">
                Vasco Pinto <span class="closing-tag">&lt;/<span class="heart">&hearts;</span>&gt;</span>
            </h1>
            <p class="loading-title">Desenvolvedor Full-stack</p>
        </div>
    </div>

    @include('components.header')

    @yield('content')

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
</body>

</html>