<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
</head>
<body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800" >
            <div class="container mx-auto  flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center ">
                    <li>
                        <a href="/">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.054 3 8.387 8h5.892l1.667-5h-5.892Z" fill="#ffffff"/><path d="M7.946 3 6.279 8H2v2h20V8h-5.613l1.667-5H20.6A2.4 2.4 0 0 1 23 5.4v13.2a2.4 2.4 0 0 1-2.4 2.4H3.4A2.4 2.4 0 0 1 1 18.6V5.4A2.4 2.4 0 0 1 3.4 3h4.546Z" fill="#ffffff"/></svg>
                        </a>
                    </li>
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="/" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>
                <div class="flex flex-col md:flex-row item-center">
                    <livewire:search-dropdown>
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                            <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <livewire:scripts>
        @yield('scripts')
</body>
</html>
