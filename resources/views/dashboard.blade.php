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

    <div class="bg-grey-light container mb-8 mt-1 mx-auto px-8 py-4 rounded">
        <h3 class="font-normal my-3 text-grey-darker-2 text-lg text-shadow-1">
            Level 16 Radicals Progression
        </h3>

        <div class="bg-grey-2 h-5 shadow-progress-bar">
            <div class="h-5 bg-blue-light bg-linear-gradient-blue-light-2 w-1/2">

            </div>
        </div>
        <div class="leading-loose text-grey-dark text-shadow-1 text-xs">
            0
            <span class="float-right">6</span>
        </div>

        <div class="bg-center bg-no-repeat bg-top-inset-shadow font-bold leading-loose my-4 pt-2 text-grey-dark-3 text-shadow-1 text-center text-xs">
            <span class="cursor-pointer">
                SEE APPRENTICE RADICALS LEFT
                <i class="fa fa-chevron-down"></i>
            </span>
        </div>

        <hr class="border-b border-b-white border-t border-grey-3 my-5">

        <h3 class="font-normal my-3 text-grey-darker-2 text-lg text-shadow-1">
            Level 16 Kanji Progression
        </h3>

        <div class="bg-grey-2 h-5 relative shadow-progress-bar">
            <div class="h-5 bg-pink bg-linear-gradient-pink-2 w-1/2">
                <div class="absolute border-black-full-10% border-r h-5 flex items-center justify-end pin-l pin-t pr-2 text-grey-dark-2 shadow-progress-bar-threshold text-shadow-3 text-xs" style="width: 90%">
                    Goal: 90%
                </div>
            </div>
        </div>
        <div class="leading-loose text-grey-dark text-shadow-1 text-xs">
            0
            <span class="float-right">36</span>
        </div>

        <div class="bg-center bg-no-repeat bg-top-inset-shadow font-bold leading-loose my-4 pt-2 text-grey-dark-3 text-shadow-1 text-center text-xs">
            <span class="cursor-pointer">
                SEE APPRENTICE KANJI LEFT
                <i class="fa fa-chevron-down"></i>
            </span>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex -mx-4">
            <div class="px-4 w-1/3">
                <h3 class="bg-grey-light leading-normal p-2 rounded-t text-center text-grey-darker-2 text-shadow-1 text-xs">
                    NEW UNLOCKS IN THE LAST 30 DAYS
                </h3>
                <table class="w-full" cellspacing="0">
                    <tbody>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-pink-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-blue-light-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="bg-grey-light font-bold leading-normal p-2 rounded-b text-center text-grey-dark-3 text-shadow-1 text-xs">
                    SEE MORE NEW UNLOCKS...
                </div>
            </div>
            <div class="px-4 w-1/3">
                <h3 class="bg-grey-light leading-normal p-2 rounded-t text-center text-grey-darker-2 text-shadow-1 text-xs">
                    CRITICAL CONDITION ITEMS
                </h3>
                <table class="w-full" cellspacing="0">
                    <tbody>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-pink-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-blue-light-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">42%</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="bg-grey-light font-bold leading-normal p-2 rounded-b text-center text-grey-dark-3 text-shadow-1 text-xs">
                    SEE MORE CRITICAL CONDITION ITEMS...
                </div>
            </div>
            <div class="px-4 w-1/3">
                <h3 class="bg-grey-light leading-normal p-2 rounded-t text-center text-grey-darker-2 text-shadow-1 text-xs">
                    BURNED ITEMS IN THE LAST 30 DAYS
                </h3>
                <table class="w-full" cellspacing="0">
                    <tbody>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-purple-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-pink-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-linear-gradient-blue-light-2">
                                <div class="cursor-pointer flex justify-between px-3 py-2 text-sm hover:text-shadow-4">
                                    <div class="text-white" lang="ja">急</div>
                                    <div class="text-white-50%">Mar 31</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="bg-grey-light font-bold leading-normal p-2 rounded-b text-center text-grey-dark-3 text-shadow-1 text-xs">
                    SEE MORE BURNED ITEMS...
                </div>
            </div>
        </div>
    </div>

    {{-- Kotoba Table Lists --}}
    {{-- Forum Topics List --}}
    {{-- Blog --}}
</body>
</html>