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

<div class="bg-[#7132E0] py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Heading -->
        <h2 class="text-white text-center text-4xl md:text-5xl font-bold mb-12">
            Nuestras weLovers <span class="whitespace-nowrap">lo afirman</span>
            <span class="inline-block transform rotate-12 ml-2">✨</span>
            <span class="inline-block transform -rotate-12 ml-1">✨</span>
        </h2>

        <!-- Slider -->
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($testimonials as $index => $testimonial)
                    <div class="swiper-slide">
                        <div class="relative rounded-[32px] overflow-hidden transition-all duration-300 h-[600px]">
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
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination !bottom-0 !-mb-2"></div>
        </div>
    </div>
</div>

<!-- Add Swiper JS to your layout -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1.5,
            spaceBetween: 20,
            centeredSlides: true,
            loop: false,
            autoplay: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
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
    .swiper-slide {
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: #ffffff;
        transform: scale(1.2);
    }
</style>
