<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $slides = [
        [
            'title' => 'Arjuna Wiwaha: Kisah Cinta dan Heroisme Menuju Jalan Spiritual',
            'description' => 'Anak Agung Gde Krisna Paramita \n I Nyoman Minta',
            'image' => 'https://press.warmadewa.ac.id/wp-content/uploads/2025/08/Cover-Depan-Arjuna-Wiwaha-scaled.jpg',
            "author" => "Anak Agung Gde Krisna Paramita, I Nyoman Minta",
            "views" => 15720
        ],
        [
            'title' => 'Urgensi Penataan Ruang Kawasan Perdesaan Berbasis kearifan Lokal Berkelanjutan',
            'description' => 'Intuitive interface designed for your convenience.',
            'image' => 'https://press.warmadewa.ac.id/wp-content/uploads/2026/01/SAMPUL-BUKU-URGENSI-PENATAAN-RUANG-COMPLETE-scaled.jpg',
            "author" => "Anak Agung Gde Krisna Paramita, I Nyoman Minta",
            "views" => 15720
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
