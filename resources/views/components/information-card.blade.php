@props(['item'])

@php
    $isBookmarked = auth()->check() && $item->bookmarkedBy->contains(auth()->id());
@endphp

<div class="relative group bg-white rounded-xl shadow hover:shadow-xl transition duration-300 overflow-hidden border hover:border-blue-400">

    <a href="#" onclick="openModal({{ $item->id }})">
        <img src="{{ asset('storage/' . $item->image) }}"
            alt="{{ $item->title }}"
            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
    </a>

    <div class="p-5">
        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">{{ $item->title }}</h3>
        <p class="mt-2 text-sm text-gray-600">{{ Str::limit(strip_tags($item->content), 100) }}</p>
    </div>

    <!-- Bookmark Button -->
    <form method="POST" action="{{ route('bookmark.toggle', $item->id) }}" class="absolute top-2 right-2">
        @csrf
        <button type="submit">
            @if ($isBookmarked)
                <svg class="w-6 h-6 text-yellow-400 fill-current" ...>★</svg>
            @else
                <svg class="w-6 h-6 text-gray-400 fill-current hover:text-yellow-400" ...>☆</svg>
            @endif
        </button>
    </form>
</div>
