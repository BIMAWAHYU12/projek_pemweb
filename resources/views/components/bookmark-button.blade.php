<?php
// resources/views/components/bookmark-button.blade.php
?>

@props(['item'])

<form action="{{ route('bookmark.toggle', $item->id) }}" method="POST">
    @csrf
    <button type="submit" class="text-sm px-2 py-1 rounded font-semibold hover:underline focus:outline-none transition duration-150 ease-in-out
        {{ auth()->user()?->bookmarks->contains($item->id) ? 'text-yellow-500' : 'text-gray-500 hover:text-blue-600' }}">
        @if(auth()->user()?->bookmarks->contains($item->id))
            <span>★ Bookmarked</span>
        @else
            <span>☆ Bookmark</span>
        @endif
    </button>
</form>
