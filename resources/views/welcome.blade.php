<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Larissa Domingues Nutricionista</title>

    <meta name="description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta property="og:title" content="Larissa Domingues Nutricionista" />
    <meta property="og:description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta property="og:image" content="https://utfs.io/f/737847b2-4588-405e-9e17-3650c95d80d3-1zbfv.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Larissa Domingues Nutricionista" />
    <meta name="twitter:description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta name="twitter:image" content="https://utfs.io/f/737847b2-4588-405e-9e17-3650c95d80d3-1zbfv.svg" />
    <link rel="icon" href="https://utfs.io/f/6ecde300-353d-4c75-a204-31fd4fdad232-1x5rt.png" type="image/png"
        sizes="512x512" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground font-welcome relative">
    <div class="flex inset-0 absolute z-0">
        <div class="flex-1 bg-background"></div>
        <div class="flex-1 bg-foreground"></div>
    </div>
    @include('welcome.navbar')
    @include('welcome.whatsapp')
    @include('welcome.hero')
    @include('welcome.bemvindo')
    @include('welcome.objetivos')
    @include('welcome.tempoconsulta')
    @include('welcome.rodape')
</body>

</html>
