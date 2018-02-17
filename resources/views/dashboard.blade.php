<!DOCTYPE html>
<html>
<head>
    <title>WaniKani / Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-grey-lighter bg-texture font-sans min-h-screen">
    @include('navbar')
    {{-- Searchbar --}}
    <div class="container mx-auto text-right">
        <span class="relative">
            <i class="absolute fa fa-search ml-2 mt-1 pin-l pin-t text-grey-darkest"></i>
            <input class="bg-grey-lightest border border-grey-light leading-normal mt-4 pl-8 pr-4 py-1 rounded-full shadow-search text-grey-dark text-shadow-white text-xs w-64 focus:no-outline" type="text">
        <span
    </div>
    {{-- Review Status --}}
    {{-- Progression --}}
    {{-- Kotoba Table Lists --}}
    {{-- Forum Topics List --}}
    {{-- Blog --}}
</body>
</html>