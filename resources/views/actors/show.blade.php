@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-1 py-16 flex  flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_path'] }}" alt="poster" class="w-76">
                <ul class="flex items-center mt-4">
                    @if ($social['facebook'])
                    <li style="margin-right: 1rem;">
                        <a href="{{ $social['facebook'] }}" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#9ca3a2" viewBox="-5.5 0 32 32"><path d="M1.188 5.594h18.438c.625 0 1.188.563 1.188 1.188V25.22c0 .625-.563 1.188-1.188 1.188H1.188C.563 26.408 0 25.845 0 25.22V6.782c0-.625.563-1.188 1.188-1.188zm13.593 11.687h2.875l.125-2.75h-3V12.5c0-.781.156-1.219 1.156-1.219h1.75l.063-2.563s-.781-.125-1.906-.125c-2.75 0-3.969 1.719-3.969 3.563v2.375H9.844v2.75h2.031v7.625h2.906v-7.625z"/></svg>
                        </a>
                    </li>
                    @endif
                    @if ($social['instagram'])
                    <li style="margin-right: 1rem;">
                        <a href="{{ $social['instagram'] }}" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#9ca3a2" viewBox="0 0 20 20"><path fill="#9ca3a2" fill-rule="evenodd" d="M5.87.123C4.242.196 2.83.594 1.69 1.729.548 2.869.155 4.286.081 5.897.037 6.902-.231 14.498.545 16.49a5.04 5.04 0 0 0 2.91 2.903c.634.246 1.356.412 2.416.461 8.86.401 12.145.183 13.53-3.364.246-.631.415-1.353.462-2.41.405-8.883-.066-10.809-1.61-12.351C17.027.507 15.586-.325 5.87.123m.081 17.944c-.97-.043-1.496-.205-1.848-.341a3.255 3.255 0 0 1-1.888-1.883c-.591-1.514-.395-8.703-.342-9.866.051-1.14.282-2.18 1.086-2.985C3.954 2 5.24 1.513 13.993 1.908c1.142.052 2.186.282 2.992 1.084.995.993 1.489 2.288 1.087 11.008-.044.968-.206 1.493-.342 1.843-.901 2.308-2.973 2.628-11.779 2.224M14.09 4.69c0 .657.534 1.19 1.194 1.19.66 0 1.195-.533 1.195-1.19a1.194 1.194 0 0 0-2.39 0M4.864 9.988a5.103 5.103 0 0 0 5.11 5.097 5.103 5.103 0 0 0 5.109-5.097 5.102 5.102 0 0 0-5.11-5.096 5.102 5.102 0 0 0-5.11 5.096m1.794 0A3.313 3.313 0 0 1 9.972 6.68a3.313 3.313 0 0 1 3.317 3.308 3.313 3.313 0 0 1-3.317 3.31 3.313 3.313 0 0 1-3.316-3.31"/></svg>
                        </a>
                    </li>
                    @endif
                    @if ($social['twitter'])
                    <li style="margin-right: 1rem;">
                        <a href="{{ $social['twitter'] }}" title="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" xml:space="preserve" fill="#9ca3a2" viewBox="0 0 512 512"><path d="M459.186 151.787c.203 4.501.305 9.023.305 13.565 0 138.542-105.461 298.285-298.274 298.285-59.209 0-114.322-17.357-160.716-47.104 8.212.973 16.546 1.47 25.012 1.47 49.121 0 94.318-16.759 130.209-44.884-45.887-.841-84.596-31.154-97.938-72.804a104.555 104.555 0 0 0 19.73 1.886c9.55 0 18.816-1.287 27.617-3.68-47.955-9.633-84.1-52.001-84.1-102.795 0-.446 0-.882.011-1.318a104.487 104.487 0 0 0 47.488 13.109c-28.134-18.796-46.637-50.885-46.637-87.262 0-19.212 5.16-37.218 14.193-52.7 51.707 63.426 128.941 105.156 216.072 109.536a105.436 105.436 0 0 1-2.718-23.896c0-57.891 46.941-104.832 104.832-104.832 30.173 0 57.404 12.734 76.525 33.102 23.887-4.694 46.313-13.423 66.569-25.438-7.827 24.485-24.434 45.025-46.089 58.002 21.209-2.535 41.426-8.171 60.222-16.505-14.051 21.018-31.833 39.48-52.313 54.263z" style="display:inline"/></svg>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9ca3a2" stroke="#9ca3a2" viewBox="0 0 32 32"><path d="M28 14.25h-3.25V11a.75.75 0 0 0-1.5 0v3.25h-6.5V11a.75.75 0 0 0-1.5 0v3.25h-6.5V11a.75.75 0 0 0-1.5 0v3.25H4A2.754 2.754 0 0 0 1.25 17v11A2.754 2.754 0 0 0 4 30.75h24A2.754 2.754 0 0 0 30.75 28V17A2.754 2.754 0 0 0 28 14.25zm-24 1.5h3.25V18a.75.75 0 0 0 1.5 0v-2.25h6.5V18a.75.75 0 0 0 1.5 0v-2.25h6.5V18a.75.75 0 0 0 1.5 0v-2.25H28c.69.001 1.249.56 1.25 1.25v7.186l-2.719-2.719a.793.793 0 0 0-.608-.215h.003a.745.745 0 0 0-.549.329l-.002.003c-1.664 2.514-3.309 3.809-4.824 3.66-2.324-.188-3.852-3.52-3.866-3.553a.754.754 0 0 0-1.367-.006l-.002.005c-.016.033-1.526 3.322-3.843 3.518-1.497.09-3.172-1.129-4.852-3.627a.75.75 0 0 0-.547-.328h-.003a.756.756 0 0 0-.603.215l-2.72 2.72v-7.187c.001-.69.56-1.249 1.25-1.25zm24 13.5H4A1.252 1.252 0 0 1 2.75 28v-1.691l3.15-3.151c1.867 2.516 3.791 3.699 5.704 3.543a6.384 6.384 0 0 0 4.377-3.14l.017-.032a6.405 6.405 0 0 0 4.386 3.204l.04.006c.111.008.223.014.334.014a7.131 7.131 0 0 0 5.327-3.556l.018-.035 3.147 3.148V28A1.252 1.252 0 0 1 28 29.25zM7.991 8.75a3.347 3.347 0 0 0 3.249-2.985l.001-.015c0-1.132-1.883-3.35-2.692-4.251a.748.748 0 0 0-.558-.249H7.99a.747.747 0 0 0-.558.25l-.001.001c-.804.9-2.673 3.118-2.673 4.249a3.338 3.338 0 0 0 3.228 3h.004zm.002-5.602a9.699 9.699 0 0 1 1.723 2.549l.025.06A1.868 1.868 0 0 1 7.995 7.25h-.004a1.851 1.851 0 0 1-1.73-1.478l-.002-.012a9.641 9.641 0 0 1 1.739-2.617l-.005.006zm7.998 5.602a3.346 3.346 0 0 0 3.248-2.985l.001-.015c0-1.132-1.882-3.35-2.691-4.251a.748.748 0 0 0-.558-.249h-.001a.747.747 0 0 0-.558.25l-.001.001c-.804.9-2.673 3.118-2.673 4.249a3.338 3.338 0 0 0 3.228 3h.004zm.002-5.602a9.671 9.671 0 0 1 1.722 2.549l.025.06a1.762 1.762 0 0 1-3.48.013l-.001-.01a9.641 9.641 0 0 1 1.739-2.617l-.005.006zM23.99 8.75a3.346 3.346 0 0 0 3.249-2.985l.001-.015c0-1.132-1.883-3.35-2.691-4.251a.75.75 0 0 0-.559-.249h-.002a.75.75 0 0 0-.558.25l-.001.001c-.803.901-2.67 3.118-2.67 4.249a3.336 3.336 0 0 0 3.226 3h.004zm.002-5.601a9.685 9.685 0 0 1 1.723 2.548l.025.06a1.762 1.762 0 0 1-3.479.013l-.001-.01a9.607 9.607 0 0 1 1.737-2.616l-.005.005z"/></svg>
                    <span class="ml-2">{{ $actor['birthday'] }} ({{ $actor['age'] }} years old) in {{ $actor['place_of_birth'] }}</span>
                </div>

                <p class="text-gray-300 text-lg mt-8">
                    {{ $actor['biography'] }}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-2">
                    @foreach ($knownForMovies as $movie)
                    <div class="mt-4">
                        <a href="{{ $movie['linkToPage'] }}">
                            <img src="{{ $movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <a href="{{ $movie['linkToPage'] }}" class="text-md leading-normal block text-gray-400 hover:text-white mt-1">
                            {{ $movie['title'] }}
                        </a>
                    </div>
                    @endforeach
                </div>

                <div>
                    <style>
                        [x-cloak] { display: none !important; }
                    </style>
                </div>

            </div>
        </div>
    </div>
    {{-- END MOVI-INFO --}}


    {{-- -CREDITS --}}
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
                <ul class="list-disc leading-loose pl-5 mt-8">
                    @foreach ($credits as $credit)
                    <li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}</li>
                    @endforeach
                </ul>
        </div>
    </div>
    {{-- END CREDITS --}}


@endsection
