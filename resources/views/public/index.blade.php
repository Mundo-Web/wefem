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



@stop


@section('content')
    <main>
        <!-- Hero Section -->
        <section class="relative h-screen">
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
                    <a href="#"
                        class="inline-block bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white text-base font-semibold px-6 py-3 rounded-full shadow">
                        Descubre nuestros servicios
                    </a>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="py-16 bg-white relative">
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

                    @foreach ($servicios as $servicio)
                        <div class="bg-colorBackgroundAzulClaro p-6 rounded-lg shadow-md text-start">
                            <div class="group-hover:hidden  w-12 h-12  bg-black mb-4"
                                style="mask-image: url('{{ asset($servicio->icono) }}'); mask-size: cover; mask-repeat: no-repeat;"">
                            </div>
                            <h3 class="text-text28 font-semibold mb-2 text-colorAzulOscuro">{{ $servicio->title }}</h3>
                            <p class="text-colorParrafo line-clamp-2 mb-4 text-text16">
                                {{ $servicio->descripcion_breve }}
                            </p>
                            <a href="#"
                                class="bg-colorBackgroundRed hover:bg-colorBackgroundRed rounded-full text-white font-semibold px-4 py-2 inline-block">Ver
                                más</a>
                        </div>
                    @endforeach





                </div>
            </div>


        </section>

        <!--Seccion productos-->
        <section class="pb-16 bg-white">

            <div class="mt-16 bg-white  container mx-auto">
                <div class="  flex flex-col  items-center">
                    <div class="w-1/2 text-center mb-12">
                        <h2 class="text-text40 font-bold mb-4 text-colorAzulOscuro">
                            <x-custom.texto-titulo :text="$home->titleProductos" style="text-colorRojo" />
                        </h2>
                        <p class="text-colorParrafo mb-12 text-text16">
                            {{ $home->subtitleProductos }}.
                        </p>
                        <a href="#"
                            class=" bg-colorBackgroundAzul hover:bg-colorBackgroundAzulOscuro text-white font-semibold px-6 py-3 rounded-full text-text16 ">Ver
                            más
                            equipos</a>
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-3  gap-6">

                    @foreach ($productos as $producto)
                        <div
                            class="bg-colorBackgroundAzulClaro h-max p-4 shadow-md text-start group cursor-pointer rounded-xl">
                            <div class="mb-4 w-full h-[212px] bg-white rounded-xl">
                                <img src="{{ $producto->imagen }}" alt="ISP Ready" class=" w-full h-full object-contain">
                            </div>
                            <h3 class="text-text28 font-semibold mb-2 text-colorAzulOscuro">{{ $producto->producto }}
                            </h3>
                            <p class="text-colorParrafo mb-4 text-text16 line-clamp-2">{{ $producto->extract }}</p>
                            <a href="#"
                                class="group-hover:w-full duration-300 ease-in-out group-hover:text-center group-hover:bg-colorBackgroundAzul bg-colorBackgroundRed  rounded-full text-white font-semibold px-4 py-2 inline-block">Ver
                                más</a>
                        </div>
                    @endforeach



                </div>
            </div>

        </section>






        <!-- Sección de Testimonios -->
        <section class=" mt-32 bg-colorBackgroundAzul ">
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
                <div class="container  justify-start  flex lg:justify-end  lg:rounded-xl order-1 py-16">
                    <div class="lg:w-7/12 lg:p-8 flex items-center justify-center flex-col">
                        <h2 class="text-text36 font-bold text-textWhite mb-4 text-center"> Con Dar Telecom, nuestra
                            conectividad mejoró
                            significativamente. <span class="text-colorRojo">El
                                soporte técnico</span> es excepcional.</h2>
                        <p class="text-white text-text24"><span class="text-colorRojo">Alejandra Neyra, </span>
                            Lima - Perú</p>
                        <div class="mt-12 flex justify-center space-x-4">

                            <img src="https://i.ibb.co/mSmGhwv/cc6e3e60f69ecac1443984f93e6078eb.png" alt="Avatar 1"
                                class="w-20 h20 rounded-full border-2 border-white">

                            <img src="https://i.ibb.co/n3NFXXs/969a7d7f009059cfa5c45bc3cfc941ae.png" alt="Avatar 2"
                                class="w-20 h-20 rounded-full border-2 border-white">


                            <img src="https://i.ibb.co/Sstnnfy/5701db8d4318f0d93edd1f4b64493b37.png" alt="Avatar 3"
                                class="w-20 h-20 rounded-full border-2 border-white">



                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Blog Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto">
                <h2 class="text-text40 font-bold text-center text-colorAzulOscuro">
                    <x-custom.texto-titulo :text="$home->titleBlogs" style="text-colorRojo" />
                </h2>
                <p class="mt-4 text-center text-colorParrafo text-text16">
                    {{ $home->subtitltBlogs }}
                </p>
                <div class="grid grid-cols-2 gap-8 mt-8">
                    <!-- Blog Card 1 -->
                    <div class="bg-colorBackgroundAzulClaro shadow-lg rounded-xl overflow-hidden p-4">
                        <img src="https://i.ibb.co/0m1RRf2/6cb07b5025576e2522606ac566b7493d.png" alt="Blog 1"
                            class="w-full h-[247px] object-cover rounded-xl mb-2">

                        <span class="text-text14 text-colorRojo font-bold pt-2">Categoría</span>
                        <h3 class="mt-2 text-text24 font-semibold text-gray-800">
                            Nullam quis justo ut lorem fermentum rhoncus in id eros.
                        </h3>
                        <p class="mt-4 text-gray-600 text-text16">
                            Vivamus vel pharetra mauris. Proin vitae erat est. Morbi ornare ipsum magna, non mattis leo
                            consectetur at.
                        </p>
                        <a href="#"
                            class="inline-block mt-4 bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white font-semibold px-4 py-2 rounded-full text-text18">Ver
                            más</a>

                    </div>

                    <div class="grid gap-8">
                        <!-- Blog Card 2 -->
                        <div class="bg-colorBackgroundAzulClaro shadow-lg rounded-lg overflow-hidden flex gap-4 p-4 ">
                            <img src="https://i.ibb.co/0sKrXH0/654c5532b9e47b24181e8fa44e48026a.png" alt="Blog 2"
                                class="w-[212px] h-[212px] object-cover rounded-xl">
                            <div class="">
                                <span class="text-text14 text-colorRojo font-bold">Categoría</span>
                                <h3 class=" text-text24 font-semibold text-colorAzulOscuro">
                                    Morbi ornare ipsum magna, non mattis leo consectetur.
                                </h3>
                                <p class="mt-2 text-colorParrafo text-text16">
                                    Sed vulputate lobortis sapien, ut consectetur magna suscipit vel. Class aptent taciti
                                    sociosqu.
                                </p>
                                <a href="#"
                                    class="inline-block mt-4 bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white font-semibold px-4 py-2 rounded-full">Leer
                                    más</a>
                            </div>
                        </div>

                        <!-- Blog Card 3 -->
                        <div class="bg-colorBackgroundAzulClaro shadow-lg rounded-lg overflow-hidden flex gap-4 p-4 ">
                            <img src="https://i.ibb.co/0sKrXH0/654c5532b9e47b24181e8fa44e48026a.png" alt="Blog 2"
                                class="w-[212px] h-[212px] object-cover rounded-xl">
                            <div class="">
                                <span class="text-text14 text-colorRojo font-bold">Categoría</span>
                                <h3 class=" text-text24 font-semibold text-colorAzulOscuro">
                                    Morbi ornare ipsum magna, non mattis leo consectetur.
                                </h3>
                                <p class="mt-2 text-colorParrafo text-text16">
                                    Sed vulputate lobortis sapien, ut consectetur magna suscipit vel. Class aptent taciti
                                    sociosqu.
                                </p>
                                <a href="#"
                                    class="inline-block mt-4 bg-colorBackgroundRed hover:bg-colorBackgroundRed text-white font-semibold px-4 py-2 rounded-full">Leer
                                    más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section -->
        <section class="bg-colorBackgroundRed relative">
            <div class="absolute left-0 top-1/2 transform  -translate-y-1/2">
                <img src="{{ asset('images/img/background/bg-newsletter.png') }}" alt="" class="w-20">
            </div>
            <div class="max-w-7xl mx-auto flex justify-between items-end py-16">
                <p class="w-1/3 text-text32 text-white"><x-custom.texto-titulo :text="$home->titleNewsletter" style="font-bold" />
                </p>
                <form action="{{ route('subscripciones.guardar') }}" method="POST"
                    class="w-1/3 flex items-center justify-center relative border-b-2 border-white py-2">
                    @csrf
                    <input type="text" id="email" name="email"
                        class="placeholder:text-white w-full pr-12 pl-3 py-2 text-white bg-transparent outline-none border-none focus:border-none shadow-none text-text14 focus:outline-none focus:ring-0 ring-transparent"
                        placeholder="Correo Electrónico" />


                    <button
                        class="absolute right-0 py-2 px-4 rounded-full text-text14 text-white bg-colorBackgroundAzul hover:bg-colorBackgroundAzul active:bg-colorBackgroundAzul duration-150 outline-none shadow-none ">
                        Enviar
                        <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                    </button>
                </form>
            </div>

        </section>




    </main>







@section('scripts_importados')


@stop

@stop
