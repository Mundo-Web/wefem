@php
    $products = [
        [
            'id' => 1,
            'name' => 'weTotal',
            'description' => 'Disco + Esterilizador',

            'price' => 255,
            'discount' => 179.9,
            'final_price' => 179.9,
            'image' => 'https://i.ibb.co/fV6JQ7Bf/e668d950658ae3c60479b23cdc546252.png',
        ],
        [
            'id' => 2,
            'name' => 'wePack',
            'description' => 'Disco + Esterilizador',

            'price' => 230,
            'discount' => 149.9,
            'final_price' => 149.9,
            'image' => 'https://i.ibb.co/zyjGBDv/dd77e7ec81f52f1e46c68e0cb7e3db80.png',
        ],
        [
            'id' => 3,
            'name' => 'weDisk',
            'description' => 'Disco mestrual',

            'price' => 180,
            'discount' => 159.9,
            'final_price' => 159.9,
            'image' => 'https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png ',
        ],
    ];

    $slidesPerView = 3; // Default en desktop
@endphp

<section class="py-16 bg-white">
    <div class="mx-auto max-w-6xl">
        <!-- Header -->
        <div class="flex flex-col  items-center mb-8 pb-4 ">
            <h2 class="text-4xl font-bold">💗 Preferidos por nosotrxs 💗</h2>
            <p class="text-lg ">¿Estás listx para el cambio?</p>
        </div>

        <!-- Carousel -->
        <div class="relative overflow-hidden">
            <!-- Previous button -->
            <button id="prevSlide"
                class="absolute -left-2 top-1/2 -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center">
                <svg class="w-8 h-8 text-[#5F48B7] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>

            <!-- Products container -->
            <div class="overflow-hidden py-4">
                <div id="productSlider" class="flex items-center transition-all duration-300 ease-in-out px-4">
                    @foreach ($products as $product)
                        @include('components.Sections.Home.CardProducto', ['product' => $product])
                    @endforeach
                </div>
            </div>

            <!-- Next button -->
            <button id="nextSlide"
                class="absolute -right-2 top-1/2 -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center ">
                <svg class="w-8 h-8 text-[#5F48B7]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>
        </div>

        <div class="flex justify-center">
            <a href="#"
                class="bg-white text-[#FF9900] border-2 border-[#FF9900] flex items-center justify-center gap-3 px-12 py-3 text-lg rounded-xl font-semibold">
                Ver más productos
                <svg class="w-5 fill-[#FF9900]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 0;
        let slidesPerView = window.innerWidth < 640 ? 1 : window.innerWidth < 1024 ? 3 : 5;
        const slider = document.getElementById("productSlider");
        const totalSlides = slider.children.length;
        const maxSlide = Math.max(0, Math.ceil(totalSlides / slidesPerView) - 1);

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * (100 / slidesPerView)}%)`;
            document.getElementById("prevSlide").disabled = currentSlide === 0;
            document.getElementById("nextSlide").disabled = currentSlide >= maxSlide;
        }

        document.getElementById("prevSlide").addEventListener("click", () => {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        });

        document.getElementById("nextSlide").addEventListener("click", () => {
            if (currentSlide < maxSlide) {
                currentSlide++;
                updateSlider();
            }
        });

        window.addEventListener("resize", () => {
            slidesPerView = window.innerWidth < 640 ? 1 : window.innerWidth < 1024 ? 3 : 5;
            updateSlider();
        });
    });
</script>
