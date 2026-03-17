<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<section class="relative overflow-hidden bg-black text-white min-h-[500px]">
    <div 
        x-data='heroSlider({{ json_encode($slides) }})'
        x-init="start()"
        class="relative"
    >
        <!-- SLIDES -->
        <div class="relative">
            <template x-for="(slide, index) in slides" :key="index">
                <div 
                    x-show="current === index"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-x-4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-4"
                    class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center"
                >
                    <!-- TEXT -->
                    <div>
                        <h2 class="text-5xl font-bold mb-6" x-text="slide.title"></h2>
                        <p class="text-gray-400 mb-8 text-lg" x-text="slide.description"></p>
                        <div class="flex gap-4">
                            <button class="bg-red-600 px-6 py-3 rounded hover:bg-red-700 transition-colors">
                                Beli Tiket
                            </button>
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div>
                        <img 
                            :src="slide.image" 
                            :alt="slide.title"
                            class="rounded-xl shadow-lg w-full object-cover"
                        >
                    </div>
                </div>
            </template>
        </div>

        <!-- DOT NAV -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            <template x-for="(slide, index) in slides" :key="index">
                <button 
                    @click="goTo(index)"
                    :class="current === index ? 'bg-red-600 w-6' : 'bg-gray-500 w-3'"
                    class="h-3 rounded-full transition-all duration-300"
                    :aria-label="'Slide ' + (index + 1)"
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
            this.timer = setInterval(() => this.next(), 4000);
        },

        next() {
            this.current = (this.current + 1) % this.slides.length;
        },

        goTo(index) {
            this.current = index;
            // Reset timer saat user klik dot
            clearInterval(this.timer);
            this.start();
        },

        destroy() {
            clearInterval(this.timer);
        }
    }
}
</script>