@props([
    'title' => 'My Product',
    'description' => 'It is never too late to be what you might have been. - George Eliot',
    'navItems'=> [
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],
])
<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<header class="border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">{{ $title }}</h1>
        <nav class="hidden md:flex space-x-6">
            @foreach ($navItems as $navItem)
                <a href="{{ $navItem['href'] }}" class="hover:text-blue-600">{{ $navItem['label'] }}</a>            
            @endforeach
        </nav>

        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Login
        </button>
    </div>
</header>