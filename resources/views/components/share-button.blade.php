@props([
    'title' => '',
    'link' => ''
])

<a 
    href="https://api.whatsapp.com/send?text={{ urlencode($title . ' - ' . $link) }}" 
    target="_blank" 
    class="inline-block text-green-600 text-sm hover:underline"
>
    🔗 Bagikan ke WhatsApp
</a>
