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

<section class="py-16 bg-white  text-[#212529]">
    <div class="mx-auto px-[5%] text-center" data-aos="fade-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out-quart">
        <!-- Header -->
        <div class="flex flex-col  items-center mb-8 pb-4 ">
            <h2 class="text-4xl font-bold flex gap-4 items-start justify-center">
                @include('components.Emoji.EmojiApple', [
                    'class' => 'h-[39.53px] w-auto object-contain',
                    'emojiCode' => '1f497',
                ]) Preferidos por nosotrxs @include('components.Emoji.EmojiApple', [
                    'class' => 'h-[39.53px] w-auto object-contain',
                    'emojiCode' => '1f497',
                ])</h2>
            <p class="text-[19.3px] leading-[19.77px] mt-4 ">¿Estás listx para el cambio?</p>
        </div>

        <!-- Carousel -->
        <div class="relative overflow-hidden">
            <!-- Previous button -->
            <button id="prevSlide"
                class="absolute -left-2 top-1/2 -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center">
                <svg class="w-8 h-8 text-[#5F48B7] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>

            <!-- Products container -->
            <div class="overflow-hidden py-4">
                <div id="productSlider"
                    class="flex items-center justify-center transition-all duration-300 ease-in-out px-4">
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

        <div class="flex justify-center mt-6">
            <a href="#"
                class="group bg-white h-[60.59px] w-[331px] text-[#FF9900] border-[0.9px] border-[#FF9900] text-[19.37px] rounded-[13.57px] font-semibold flex items-center justify-center gap-3 leading-[29.05px] hover:bg-[#FF9900] hover:text-white transition-colors duration-300">
                Ver más productos
                <svg class="w-5 fill-[#FF9900] group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
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
