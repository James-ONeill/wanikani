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
        </span>
    </div>

    {{-- Review Status --}}
    <div class="container flex font-light mt-4 mx-auto text-center text-grey-darker-2 text-sm">
        <div class="border-grey-light border-r p-6 w-1/3">
            <div class="cursor-help font-bold font-sans-2 mb-4 text-4xl">Available Now</div>
            <i class="fa fa-clock-o"></i>
            Next Review
        </div>
        <div class="border-grey-light border-l border-l-white border-r p-6 w-1/3">
            <div class="font-bold font-sans-2 mb-4 text-4xl">15</div>
            <i class="fa fa-inbox"></i>
            Next Hour
        </div>
        <div class="border-l border-white p-6 w-1/3">
            <div class="font-bold font-sans-2 mb-4 text-4xl">68</div>
            <i class="fa fa-inbox"></i>
            Next Day
        </div>
    </div>
    {{-- Progression --}}
    {{-- Kotoba Table Lists --}}
    {{-- Forum Topics List --}}
    {{-- Blog --}}
</body>
</html>