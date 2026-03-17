@props([
    'title' => 'My Product',
    'footerLinks' => [
        ['label' => 'Privacy', 'href' => '#'],
        ['label' => 'Terms', 'href' => '#'],
    ],
])
<!-- It is never too late to be what you might have been. - George Eliot -->
<footer class="border-t py-8">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between text-sm text-gray-500">
        <p>© 2026 {{ $title }}</p>
        <div class="flex gap-6">
            @foreach ($footerLinks as $link)
                <a href="{{ $link['href'] }}" class="hover:text-blue-600">{{ $link['label'] }}</a>
            @endforeach
        </div>
    </div>
</footer>