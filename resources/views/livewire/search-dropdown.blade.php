<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false" >
    <input wire:model.debounce.250ms="search"
       type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
       placeholder="Search"
       x-ref="search"
       @keydown.window="
           if (event.key === '/') {
               event.preventDefault();
               $refs.search.focus();
           }"
       @focus="isOpen = true"
       @click="isOpen = true"
       @keydown.escape.window="isOpen = false"
       @keydown="isOpen = true"
       @keydown.shift.tab="isOpen = false"
    >
    <div class="absolute top-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none"  class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.796 15.811 21 21m-3-10.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"/></svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) >= 1)
    <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.trasition.opacity="isOpen" @keydown.escape.window="isOpen = false">
            @if ($searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                <li class="border-b border-gray-700">
                    <a
                        href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                        @if ($loop->last) @keydown.tab="isOpen: false" @endif
                        >
                        @if ($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                        @else
                            <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                        @endif
                        <span class="ml-4">{{ $result['title'] }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
    </div>
    @endif
</div>
