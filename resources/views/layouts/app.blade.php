<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="ccduU6x1DDOnrRFELqlDacb04QBltIuT2ValjaJXTWo" />
    <meta name="description" content="Vasco Pinto - Desenvolvedor Full-stack especializado em soluções web. Explore projectos em desenvolvimento de software, consultoria TI e inovação tecnológica.">

    <!-- Meta Tags para Open Graph (Facebook, LinkedIn, etc.) -->
   <!-- Open Graph Meta Tags -->
<meta property="og:title" content="Vasco Pinto - Desenvolvedor Full-stack">
<meta property="og:description" content="Descubra soluções inovadoras em desenvolvimento de software, consultoria TI e tecnologia de ponta com Vasco Pinto.">
<meta property="og:image" content="{{ asset('img/vp.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Vasco Pinto">
<meta property="og:locale" content="pt_PT">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Vasco Pinto - Desenvolvedor Full-stack">
<meta name="twitter:description" content="Explore projectos inovadores em desenvolvimento de software e consultoria tecnológica.">
<meta name="twitter:image" content="{{ asset('img/vp.jpg') }}">
<meta name="twitter:site" content="@VascoPinto">
    <title>@yield('title', 'Vasco Pinto - Desenvolvedor Full-stack')</title>

    <!-- Preload Favicon -->
    <link rel="preload" href="{{ asset('img/favicon.png') }}" as="image">

    <!-- Bootstrap CSS e Icons via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <!-- Favicon -->
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

    <!-- Inclusão do Header -->
    @include('components.header')

    <!-- Conteúdo Principal -->
    @yield('content')

    <!-- Inclusão do Footer -->
    @include('components.footer')

    <!-- Scripts Bootstrap via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts personalizados -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
