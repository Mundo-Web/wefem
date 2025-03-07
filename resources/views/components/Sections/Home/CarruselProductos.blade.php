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
        [
            'id' => 4,
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<section class="py-16 bg-white  text-[#212529]">
    <div class="mx-auto xl:px-[5%]  text-center">
        <!-- Header -->
        <div class="flex flex-col  items-center  pb-4 ">
            <h2 class="text-xl md:text-3xl 2xl:text-4xl font-bold flex gap-2 md:gap-4 items-start justify-center">
                @include('components.Emoji.EmojiApple', [
                    'class' => 'h-[26.53px] md:h-[33.53px] 2xl:h-[39.53px] w-auto object-contain',
                    'emojiCode' => '1f497',
                ]) Preferidos por nosotrxs @include('components.Emoji.EmojiApple', [
                    'class' => 'h-[26.53px]  md:h-[33.53px] 2xl:h-[39.53px] w-auto object-contain',
                    'emojiCode' => '1f497',
                ])</h2>
            <p class="text-[16.3px] md:text-[19.3px] leading-[19.77px] mt-4 ">¿Estás listx para el cambio?</p>
        </div>

        <!-- Carousel -->
        <div class="hidden xl:block relative overflow-hidden md:max-w-5xl 2xl:max-w-7xl mx-auto">
            <!-- Previous button -->
            <button id="prevSlide"
                class="absolute -left-2 2xl:left-12 top-1/2 -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center">
                <svg class="w-8 h-8 text-[#5F48B7] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>

            <!-- Products container -->
            <div class="overflow-hidden py-4">
                <div id="productSlider"
                    class="flex items-center justify-center transition-all duration-300 md:gap-4 2xl:gap-2 ease-in-out px-4">
                    @foreach ($products as $product)
                        @include('components.Sections.Home.CardProducto', ['product' => $product])
                    @endforeach
                </div>
            </div>

            <!-- Next button -->
            <button id="nextSlide"
                class="absolute -right-2 2xl:right-12  top-1/2 -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center ">
                <svg class="w-8 h-8 text-[#5F48B7]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>
        </div>
        <!-- Slider -->
      <div class="xl:hidden ">
          <div class="swiper productSwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($products as $product)
                    <div class="swiper-slide">
                        @include('components.Sections.Home.CardProducto', ['product' => $product])
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->

            <!-- Navigation buttons -->

        </div>
      </div>


        <div class="flex justify-center">
            <a href="/catalogo"
                class="group bg-white h-[55.59px] 2xl:h-[60.59px] w-[300px] 2xl:w-[331px] text-[#FF9900] border-[0.9px] border-[#FF9900] md:text-[16.37px] 2xl:text-[19.37px] rounded-[13.57px] font-semibold flex items-center justify-center gap-3 leading-[29.05px] hover:bg-[#FF9900] hover:text-white transition-colors duration-300">
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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.productSwiper', {

            slidesPerView: 2.5,
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
            autoplay: false,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
            },
            on: {
                init: function() {
                    updateSlides(this);
                },
                slideChange: function() {
                    updateSlides(this);
                },
            },
        });

        // Function to update slides appearance
        function updateSlides(swiper) {
            const slides = swiper.slides;
            slides.forEach((slide, index) => {
                if (index === swiper.activeIndex) {
                    slide.style.transform = 'scale(0.90)';
                    slide.style.filter = 'opacity(1)';
                    slide.style.margin = '0px 10px 0px 10px'
                } else {
                    slide.style.transform = 'scale(1)';
                    slide.style.filter = 'opacity(0.5)';
                }
            });
        }
    });
</script>

<style>
    /* Custom styles for Swiper */
    /* Custom styles for Swiper */
    .swiper-slide {
        transition: all 0.3s ease;
    }

    .swiper-pagination {

        bottom: 0.3rem !important;
        /* Poner la paginación más abajo */
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        opacity: 0.2;
    }

    .swiper-pagination-bullet-active {
        background: #ffffff;
        transform: scale(1.2);
    }

    /* Navigation buttons */
    /* Navigation buttons */
    .swiper-button-prev,
    .swiper-button-next {
        color: white;
        font-size: 24px !important;
        /* Ajusta el tamaño del ícono */
        width: 31px !important;
        /* Aumenta el área de clic */
        height: 31px !important;
    }

    /* Ajustar el icono dentro de los botones */
    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 24px !important;
        /* Cambia el tamaño de la flecha */
    }
</style>
