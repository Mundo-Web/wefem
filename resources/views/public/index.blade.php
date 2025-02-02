@extends('components.public.matrix', ['pagina' => 'index'])
@section('titulo', 'Inicio')
@section('css_importados')

    <style>
        .swiper-pagination_productos>.swiper-pagination-bullet-active {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_29.svg') }});
        }

        .swiper-pagination_productos .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_30.svg') }});
        }

        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_43.svg') }})
        }

        .swiper-button-next:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .swiper-button-prev {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_44.svg') }})
        }

        .swiper-button-prev:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .slider-pagination {

            margin-bottom: 30px;
        }

        /* Estilo de los puntos de paginación */
        .slider-pagination .swiper-pagination-bullet {
            width: 16px;
            /* Ancho personalizado */
            height: 9px;
            /* Alto personalizado */
            border-radius: 6px;
            /* Bordes redondeados */
            background-color: #F07407 !important;
            /* Color base */
            transition: background-color 0.3s, transform 0.3s;
            /* Transiciones suaves */
        }

        /* Estilo de los puntos que no están activos */
        .slider-pagination .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: white !important;
            /* Color más tenue */
            opacity: 0.8;
            /* Opacidad constante */
        }

        #imagen-zona {
            transition: opacity 0.3s ease-in-out;
        }

        .blocker {
            z-index: 50 !important;
        }

        .comment.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .comment {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }
    </style>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 75%;
            width: 100%;
        }

        .mySwiper {
            margin-top: 2rem;
            height: 25%;
            box-sizing: border-box;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mySwiper .swiper-slide {
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;

        }

        .mySwiper .swiper-slide-thumb-active img {
            border-color: #ed1b2f
        }

        .swiper-slide img {
            display: block;
            width: 5rem;
            height: 5rem;
            object-fit: contain;
            border: 4px solid #FFFFFF;
        }
    </style>


@stop


@section('content')
    <main class="bg-white">
        <!-- Hero Section -->
        <section class="relative h-screen" data-aos="zoom-in" data-aos-offset="150" data-aos-duration="1000"
            data-aos-delay="200">
            <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted>
                <source src="{{ asset('images/img/background/backgroundInicio.mp4') }}" type="video/mp4" />
                Tu navegador no soporta la reproducción de videos.
            </video>
            <div
                class="absolute inset-0 bg-transparent bg-opacity-50 flex flex-col justify-center items-center text-white text-center">
                <h1 class="text-[52px] w-3/6 font-semibold leading-[58px] text-shadow-custom">
                    <x-custom.texto-titulo :text="$home->titleHero" style="text-colorRojo" />
                </h1>
                <p class="mt-4 w-3/6 text-xl text-gray-300 leading-[30px]">
                    {{ $home->subtitleHero }}
                </p>
                <div class="mt-8">
                    <a href="{{ route('servicios') }}" target="_blank"
                        class="inline-block bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white text-base font-semibold px-6 py-3 rounded-full shadow">
                        Descubre nuestros servicios
                    </a>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="py-16  relative" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000"
            data-aos-delay="200">
            <!-- Imagen superpuesta -->
            <div class="absolute left-0  -bottom-0  transform translate-y-1/2">
                <img src="{{ asset('images/img/background/bg-cable.png') }}" alt="" class="w-96">
            </div>
            <div class="max-w-7xl  mx-auto flex  items-center justify-between">
                <div class="w-2/6 text-start mb-12  ">
                    <h2 class="text-text40 font-extrabold text-start text-colorAzulOscuro">
                        <x-custom.texto-titulo :text="$home->titleServicios" style="text-colorRojo" />
                    </h2>
                    <p class="mt-4 text-colorParrafo  mx-auto text-text16">
                        {{ $home->subtitleServicios }}.
                    </p>
                </div>

                <div class="w-1/2 grid grid-cols-1 md:grid-cols-2  gap-6">

                    @foreach ($servicios->take(4) as $servicio)
                        <div class="bg-colorBackgroundAzulClaro p-6 rounded-lg shadow-md text-start" data-aos="fade-up"
                            data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">
                            <div class="group-hover:hidden  w-12 h-12  bg-black mb-4 "
                                style="mask-image: url('{{ asset($servicio->icono) }}'); mask-size: contain; mask-repeat: no-repeat;"">
                            </div>
                            <h3 class="text-text28 font-semibold mb-2 text-colorAzulOscuro">{{ $servicio->title }}</h3>
                            <p class="text-colorParrafo line-clamp-2 mb-4 text-text16">
                                {{ $servicio->descripcion_breve }}
                            </p>
                            <a href="{{ route('servicios') }}"
                                class="bg-colorBackgroundRed hover:bg-colorBackgroundRed rounded-full text-white font-semibold px-4 py-2 inline-block">Ver
                                más</a>
                        </div>
                    @endforeach





                </div>
            </div>


        </section>

        <!--Seccion productos-->
        <section class="pb-16 " data-aos="zoom-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">

            <div class="mt-16 bg-white  container mx-auto">
                <div class="  flex flex-col  items-center">
                    <div class="w-1/2 text-center mb-12">
                        <h2 class="text-text40 font-bold mb-4 text-colorAzulOscuro">
                            <x-custom.texto-titulo :text="$home->titleProductos" style="text-colorRojo" />
                        </h2>
                        <p class="text-colorParrafo mb-12 text-text16">
                            {{ $home->subtitleProductos }}.
                        </p>
                        <a href="{{ route('catalogo.all') }}"
                            class=" bg-colorBackgroundAzul hover:bg-colorBackgroundAzulOscuro text-white font-semibold px-6 py-3 rounded-full text-text16 ">Ver
                            más
                            equipos</a>
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-3  gap-6">

                    @foreach ($productos as $producto)
                        <div class="bg-colorBackgroundAzulClaro h-max p-4 shadow-md text-start group cursor-pointer rounded-xl"
                            data-aos="zoom-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">
                            <a href="{{ route('producto', $producto->slug) }}">
                                <div class="mb-4 w-full h-[212px] bg-white rounded-xl">
                                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->producto }}"
                                        class=" w-full h-full object-contain">
                                </div>
                                <h3 class="text-text28 font-semibold mb-2 text-colorAzulOscuro">
                                    {{ $producto->producto }}
                                </h3>
                                <p class="text-colorParrafo mb-4 text-text16 line-clamp-2">{{ $producto->extract }}</p>
                                <a href="{{ route('producto', $producto->slug) }}"
                                    class="group-hover:w-full duration-300 ease-in-out group-hover:text-center group-hover:bg-colorBackgroundAzul bg-colorBackgroundRed  rounded-full text-white font-semibold px-4 py-2 inline-block">Ver
                                    más</a>
                            </a>
                        </div>
                    @endforeach



                </div>
            </div>

        </section>






        <!-- Sección de Testimonios -->
        <section class=" mt-32 bg-colorBackgroundAzul " data-aos="fade-down" data-aos-offset="150" data-aos-duration="1000"
            data-aos-delay="200">
            <div class=" relative ">
                <!-- Imagen superpuesta -->
                <div class="absolute left-0  top-0 transform rotate-180">
                    <img src="{{ asset('images/img/background/bg-testimonio.png') }}" alt="" class="w-72">
                </div>
                <!-- Imagen superpuesta -->
                <div class="absolute right-0 bottom-0 transform ">
                    <img src="{{ asset('images/img/background/bg-testimonio.png') }}" alt="" class="w-40">
                </div>
                <!-- Imagen del doctor -->
                <div class="lg:w-1/2 relative z-10 lg:absolute lg:left-0 bottom-0 ">

                    <img src="https://i.ibb.co/98Nm5Gs/ed2c30eb3b8e0f2d46d9b49e67419104.png" alt="Dr. Kewin"
                        class="  w-[600] h-[677px] object-cover justify-self-start " loading="lazy" />


                </div>
                <!-- Contenido textual -->
                <div class="max-w-7xl mx-auto  justify-start  flex lg:justify-end  lg:rounded-xl order-1 py-16"
                    data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">
                    <div class="lg:w-7/12 lg:p-8 flex items-center justify-center flex-col">
                        <!-- Slider main container -->
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="swiper-wrapper">
                                @foreach ($testimonios as $testimonio)
                                    <div class="swiper-slide">

                                        <h2 class="text-text36 font-bold text-textWhite mb-4 text-center">
                                            <x-custom.texto-titulo :text="$testimonio->testimonie" style="text-colorRojo" />
                                        </h2>
                                        <p class="text-white text-text24"><span
                                                class="text-colorRojo">{{ $testimonio->name }},
                                            </span>
                                            {{ $testimonio->departamento }} - {{ $testimonio->pais }}</p>
                                    </div>
                                @endforeach


                            </div>

                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper" style="display: flex; justify-content: center;">
                                @foreach ($testimonios as $testimonio)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($testimonio->ocupation) }}"
                                            class="w-20 h-20 rounded-full border-2 border-white object-contain" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <script>
                            const swiper = new Swiper(".mySwiper", {
                                loop: true,
                                spaceBetween: 10,
                                slidesPerView: 8,
                                freeMode: true,
                                watchSlidesProgress: true,
                            });
                            var swiper2 = new Swiper(".mySwiper2", {
                                loop: true,
                                spaceBetween: 10,

                                thumbs: {
                                    swiper: swiper,
                                },
                            });
                        </script>



                    </div>

                </div>
            </div>
            </div>
        </section>


        <!-- Blog Section -->
        <section class="py-16 bg-white" data-aos="zoom-up" data-aos-offset="150" data-aos-duration="1000"
            data-aos-delay="200">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-text40 font-bold text-center text-colorAzulOscuro">
                    <x-custom.texto-titulo :text="$home->titleBlogs" style="text-colorRojo" />
                </h2>
                <p class="mt-4 text-center text-colorParrafo text-text16">
                    {{ $home->subtitltBlogs }}
                </p>
                <div class="grid grid-cols-2 gap-8 mt-8" data-aos="fade-up" data-aos-offset="150"
                    data-aos-duration="1000" data-aos-delay="200">
                    <!-- Blog Card 1 -->

                    <div class="bg-colorBackgroundAzulClaro shadow-lg rounded-xl overflow-hidden p-4" data-aos="zoom-in"
                        data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">
                        <a href="{{ route('detalleBlog', $mostRecentPost->slug) }}">
                            <img src="{{ asset($mostRecentPost->imagen) }}" alt="Blog 1"
                                class="w-full h-[247px] object-cover rounded-xl mb-2">

                            <span
                                class="text-text14 text-colorRojo font-bold pt-2">{{ $mostRecentPost->category->nombre }}</span>
                            <h3 class="mt-2 text-text24 font-semibold text-gray-800">
                                {{ $mostRecentPost->titulo }}
                            </h3>
                            <p class="mt-4 text-gray-600 text-text16 line-clamp-2">
                                {{ $mostRecentPost->extracto }}
                            </p>
                            <a href="{{ route('detalleBlog', $mostRecentPost->slug) }}"
                                class="inline-block mt-4 bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white font-semibold px-4 py-2 rounded-full text-text18">Ver
                                más</a>
                        </a>
                    </div>


                    <div class="grid  gap-4">
                        <!-- Blog Card 2 -->
                        @foreach ($nextTwoRecentPosts as $post)
                            <a href="{{ route('detalleBlog', $post->slug) }}" class=" w-full">
                                <div
                                    class="bg-colorBackgroundAzulClaro shadow-lg rounded-lg  overflow-hidden flex gap-4 p-4 ">
                                    <img src="{{ asset($post->imagen) }}" alt="Blog 2"
                                        class="w-[212px] h-[212px] object-cover rounded-xl">
                                    <div class="">
                                        <span
                                            class="text-text14 text-colorRojo font-bold">{{ $post->category->nombre }}</span>
                                        <h3 class=" text-text24 font-semibold text-colorAzulOscuro line-clamp-2">
                                            {{ $post->titulo }}
                                        </h3>
                                        <p class="mt-2 text-colorParrafo text-text16 line-clamp-2">
                                            {{ $post->extracto }}
                                        </p>
                                        <a href="{{ route('detalleBlog', $post->slug) }}"
                                            class="inline-block mt-4 bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white font-semibold px-4 py-2 rounded-full">Leer
                                            más</a>
                                    </div>
                                </div>
                            </a>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section -->

        @include('components.custom.newsletter-section')
        <!-- Footer Section -->




    </main>







@section('scripts_importados')


@stop

@stop
