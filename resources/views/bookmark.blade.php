<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ditandai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
<x-app-layout>
    <div class="bg-gray-50 min-h-screen py-10" x-data="{ showModal: false, selected: null }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Halaman yang Ditandai</h2>
                <p class="mt-2 text-gray-600">Kumpulan informasi yang kamu simpan sebagai favorit.</p>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse ($items as $item)
                    <div @click="showModal = true; selected = {{ json_encode($item) }}"
                         class="group block bg-white rounded-xl shadow hover:shadow-xl transition duration-300 overflow-hidden border hover:border-blue-400 relative cursor-pointer">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             alt="{{ $item->title }}"
                             class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />

                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">
                                {{ $item->title }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-600">
                                {{ Str::limit(strip_tags($item->content), 100) }}
                            </p>
                        </div>
                        <!-- Share Button -->
                                    <div class="px-5 pb-4">
                        <a 
                            href="https://api.whatsapp.com/send?text={{ urlencode('*' . $item->title . '*') }}%0A%0A{{ urlencode(strip_tags($item->content)) }}%0A%0A{{ urlencode($item->link) }}" 
                            target="_blank" 
                            class="mt-3 inline-flex items-center space-x-2 text-green-600 text-sm hover:underline"
                        >
                            <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-5 h-5">
                            <span>Bagikan ke WhatsApp</span>
                        </a>
                                </div>

                        <!-- Tombol Unbookmark -->
                        <form method="POST" action="{{ route('bookmark.toggle', $item->id) }}"
                              class="absolute top-3 right-3 z-20"
                              @click.stop>
                            @csrf
                            <button type="submit" class="text-yellow-400 hover:text-red-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-yellow-400" viewBox="0 0 20 20">
                                    <path d="M5 2a2 2 0 00-2 2v14l7-4 7 4V4a2 2 0 00-2-2H5z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-20">
                        <p class="text-lg font-medium">Belum ada informasi yang ditandai.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $items->links() }}
            </div>
        </div>

        <!-- Detail Modal -->
        <div x-show="showModal" x-transition class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
             x-cloak @click.away="showModal = false">
            <div class="bg-white rounded-xl max-w-2xl w-full p-6 overflow-y-auto max-h-[90vh] shadow-xl relative">
                <button class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-xl font-bold"
                        @click="showModal = false">&times;</button>

                <template x-if="selected">
                    <div>
                        <img :src="'/storage/' + selected.image" alt="" class="w-full h-60 object-cover rounded-md mb-4" />
                        <h2 class="text-2xl font-bold text-gray-800 mb-2" x-text="selected.title"></h2>
                        <div class="text-gray-600 text-sm leading-relaxed" x-html="selected.content"></div>
                        <a :href="selected.link" target="_blank"
                           class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                            Kunjungi Link
                        </a>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</x-app-layout>
</body>
</html>
