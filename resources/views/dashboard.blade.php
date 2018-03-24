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
    <div class="border-b border-white-75% container flex font-light mt-4 mx-auto text-center text-grey-darker-2 text-sm">
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

    <div class="container flex mx-auto text-black-full-30% text-center text-sm">
        <div class="bg-linear-gradient-pink-1 bg-pink pb-6 pt-7 px-6 rounded-bl shadow-progression w-1/5">
            <div class="font-bold font-sans-2 mb-3 text-2xl text-shadow-2 text-white">1</div>
            Apprentice
        </div>
        <div class="bg-linear-gradient-purple-1 bg-purple pb-6 pt-7 px-6 shadow-progression w-1/5">
            <div class="font-bold font-sans-2 mb-3 text-2xl text-shadow-2 text-white">2</div>
            Guru
        </div>
        <div class="bg-blue-dark bg-linear-gradient-blue-dark-1 pb-6 pt-7 px-6 shadow-progression w-1/5">
            <div class="font-bold font-sans-2 mb-3 text-2xl text-shadow-2 text-white">3</div>
            Master
        </div>
        <div class="bg-blue-light bg-linear-gradient-blue-light-1 pb-6 pt-7 px-6 shadow-progression w-1/5">
            <div class="font-bold font-sans-2 mb-3 text-2xl text-shadow-2 text-white">4</div>
            Enlightened
        </div>
        <div class="bg-grey-darker-3 bg-linear-gradient-grey-darker-3-1 pb-6 pt-7 px-6 rounded-br shadow-progression w-1/5">
            <div class="font-bold font-sans-2 mb-3 text-2xl text-shadow-2 text-white">5</div>
            Burned
        </div>
    </div>


    {{-- Kotoba Table Lists --}}
    {{-- Forum Topics List --}}
    {{-- Blog --}}
</body>
</html>