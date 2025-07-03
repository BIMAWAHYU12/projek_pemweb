@props(['item'])
@props(['selected'])

<div 
    x-show="showModal" 
    x-transition 
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 backdrop-blur-sm"
>
    <div class="bg-white max-w-2xl w-full mx-4 md:mx-auto max-h-[90vh] overflow-y-auto rounded-lg shadow-xl p-6 relative">

        <!-- Tombol Close -->
        <button @click="showModal = false" 
                class="absolute top-3 right-4 text-2xl text-gray-400 hover:text-red-500">&times;</button>

        <!-- Konten Modal -->
        <template x-if="selected">
            <div>
                <img :src="'/storage/' + selected.image" 
                     alt="" 
                     class="w-full h-60 object-cover rounded mb-4">

                <h2 class="text-2xl font-bold mb-2" x-text="selected.title"></h2>
                <p class="text-gray-700 text-sm whitespace-pre-line mb-4" x-html="selected.content"></p>

                <div class="mt-4">
                    <a :href="selected.link" target="_blank" 
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Kunjungi Link
                    </a>
                </div>
            </div>
        </template>

    </div>
</div>
