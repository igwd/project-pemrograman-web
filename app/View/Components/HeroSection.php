<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $slides = [
        [
            'title' => 'Welcome to Our Platform',
            'description' => 'Discover the power of our innovative solution.',
            'image' => 'https://teknik.warmadewa.ac.id/storage/carousel/01KCFRB8Q55SM25EX5RJSDCNN9.png'
        ],
        [
            'title' => 'Easy to Use',
            'description' => 'Intuitive interface designed for your convenience.',
            'image' => 'https://teknik.warmadewa.ac.id/storage/carousel/01KCFRB8Q55SM25EX5RJSDCNN9.png'
        ]
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Component constructor logic if needed
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-section', [
            'slides' => $this->slides
        ]);
    }
}
