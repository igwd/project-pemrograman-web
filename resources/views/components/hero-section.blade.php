<section class="relative overflow-hidden bg-[#263661] text-white">
    <div 
        x-data='heroSlider(@json($slides))'
        x-init="start()"
        x-cloak
        class="relative"
    >
        <div class="relative min-h-200 flex items-center">

            <template x-for="(slide, index) in slides" :key="index">
                <div 
                    x-show="current === index"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-x-10"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0 w-full"
                >
                    <!-- Background -->
                    <div 
                        class="absolute inset-0 bg-cover bg-center"
                        :style="'background-image: url(' + slide.image + ')'"
                    ></div>

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-[#263661]/80"></div>

                    <!-- Content -->
                    <div class="relative z-10 max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-2 gap-8 items-center">

                        <!-- TEXT -->
                        <div class="space-y-6">

                            <!-- LABEL -->
                            <span class="inline-block bg-[#c12226] text-white text-xs px-3 py-1 rounded-full uppercase tracking-wider">
                                Buku Populer
                            </span>

                            <!-- TITLE -->
                            <h2 class="text-4xl lg:text-5xl font-bold leading-tight" x-text="slide.title"></h2>
                            
                            <!-- AUTHOR -->
                            <p class="text-lg text-purple-200 font-medium line-clamp-2">
                                oleh <span x-text="slide.author"></span>
                            </p>
                            
                            <!-- CTA -->
                            <div class="flex flex-wrap gap-4">
                                <button class="bg-[#c12226] px-6 py-3 rounded-lg font-semibold shadow-lg hover:scale-105 transition-transform">
                                    Pesan Sekarang
                                </button>
                                <button class="bg-white/10 hover:bg-white/20 px-6 py-3 rounded-lg border border-white/20 hover:scale-105 transition-transform">
                                    Detail Buku →
                                </button>
                            </div>

                            <!-- POPULARITY INFO -->
                            <div class="flex items-center gap-6 pt-4 border-t border-white/20">
                                
                                <!-- Views -->
                                <div class="flex items-center gap-2 text-white">
                                    <x-heroicon-o-eye class="w-5 h-5" />
                                    <span class="font-semibold" x-text="formatViews(slide.views)"></span>
                                </div>

                                <!-- STATUS -->
                                <div class="text-sm text-gray-400">
                                    Banyak dilihat minggu ini
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="relative flex justify-center">
                            <div class="absolute inset-0 bg-blue-500/20 blur-[120px] rounded-full"></div>
                            
                            <img 
                                :src="slide.image" 
                                class="relative z-10 max-w-md rounded-2xl shadow-2xl transform hover:scale-105 transition duration-500"
                            >
                        </div>

                    </div>
                </div>
            </template>
        </div>

        <!-- DOTS -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex gap-3 z-20">
            <template x-for="(slide, index) in slides" :key="index">
                <button 
                    @click="goTo(index)"
                    :class="current === index ? 'bg-white w-8' : 'bg-white/30 w-2'"
                    class="h-2 rounded-full transition-all duration-300"
                ></button>
            </template>
        </div>
    </div>
</section>

<script>
function heroSlider(slides) {
    return {
        current: 0,
        slides: slides || [],
        timer: null,

        start() {
            if (!this.slides.length) return;
            this.stop();
            this.timer = setInterval(() => this.next(), 5000);
        },

        next() {
            this.current = (this.current + 1) % this.slides.length;
        },

        goTo(index) {
            this.current = index;
            this.start();
        },

        stop() {
            if (this.timer) clearInterval(this.timer);
        },

        // Format views jadi lebih nice (15.7K, 1.2M)
        formatViews(views) {
            if (!views) return '0 views';
            if (views >= 1000000) return (views / 1000000).toFixed(1) + 'M views';
            if (views >= 1000) return (views / 1000).toFixed(1) + 'K views';
            return views + ' views';
        }
    }
}
</script>