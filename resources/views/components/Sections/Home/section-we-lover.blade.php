@php
    $testimonials = [
        [
            'image' => 'https://i.ibb.co/Q3FDFsbt/image.png',
        ],
        [
            'image' => 'https://i.ibb.co/dHGmtkf/dfaabe6966459462e61bf7aef70f58b4.png',
        ],
        [
            'image' => 'https://i.ibb.co/3mhCpVtC/image.png',
        ],
    ];
@endphp


<!-- Add Swiper CSS to your layout -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class=" py-16 px-4"
    style="background: rgb(82,46,170);
background: linear-gradient(0deg, rgba(82,46,170,1) 0%, rgba(103,69,186,1) 100%);">
    <div class="max-w-6xl mx-auto" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out-quart">
        <!-- Heading -->
        <h2
            class="text-white text-center text-[55.41px]  leading-[83.11px] tracking-[0.01em] font-bold mb-12 flex items-center justify-center gap-2">
            Nuestras weLovers
            @include('components.Emoji.EmojiApple', ['emojiCode' => '2728', 'class' => 'h-[55px]'])
            <span class="whitespace-nowrap">lo afirman</span>
            @include('components.Emoji.EmojiApple', ['emojiCode' => '2728', 'class' => 'h-[55px]'])
        </h2>

        <!-- Slider -->
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($testimonials as $index => $testimonial)
                    <div class="swiper-slide">
                        <div class="pb-10 px-4">
                            <div
                                class="relative rounded-xl overflow-hidden transition-all duration-300 h-[600px] w-[355px]">
                                <img src="{{ $testimonial['image'] }}" alt="Testimonial {{ $index + 1 }}"
                                    class="w-full h-full object-cover">
                                <!-- Video overlay with play button and counter -->
                                <div class="absolute bottom-4 left-4 flex items-center gap-2 text-white">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</div>

<!-- Add Swiper JS to your layout -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.testimonialSwiper', {

            slidesPerView: 1.5,
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
            autoplay: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
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
                    slide.style.transform = 'scale(1)';
                    slide.style.filter = 'brightness(1)';
                } else {
                    slide.style.transform = 'scale(0.85)';
                    slide.style.filter = 'brightness(0.5)';
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
