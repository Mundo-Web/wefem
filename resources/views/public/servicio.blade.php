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

        /*ESTILOS PARA ESTA SE3CCION DAR TELECOM*/
        #descripcion_extensa>p {
            margin-bottom: 1rem;
        }
    </style>



@stop


@section('content')
    <main>

        <!-- Header Section -->
        <div class="h-[200px] w-full bg-cover bg-colorBackgroundAzulOscuro flex flex-col justify-center"
            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)), url('{{ asset($servicioPage->imagen) }}'); background-position: center center; background-size: cover; background-attachment: fixed;">
        </div>

        <!-- Subheader -->
        <section class="text-center py-8 px-4 max-w-3xl mx-auto">
            <div class=" bg-opacity-50 flex items-center justify-center">
                <h1 class="text-colorAzulOscuro text-text48 font-semibold">
                    <x-custom.texto-titulo :text="$servicioPage->titulo" style="text-colorRojo" />
                </h1>
            </div>
            <p class="text-colorParrafo text-text16 ">
                {{ $servicioPage->subtitulo }}
            </p>
        </section>

        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="md:w-1/4">
                <nav class="bg-white shadow-md rounded-lg">
                    <ul class="flex gap-4 flex-col">
                        @foreach ($servicios as $servicio)
                            <li
                                class="group rounded-xl flex items-center gap-4 p-4  text-text20 font-semibold bg-colorBackgroundAzulClaro hover:bg-colorBackgroundRed text-colorAzulOscuro hover:text-white transition-all duration-300">

                                <div class="group-hover:hidden h-7 w-7 bg-black"
                                    style="mask-image: url('{{ asset($servicio->icono) }}'); mask-size: cover; mask-repeat: no-repeat;"">
                                </div>
                                <img src="{{ asset($servicio->icono) }}" alt="ISP Ready"
                                    class="hidden h-7 w-7 fill-black group-hover:inline-block" />
                                <a href="#" class=" ">ISP
                                    Ready</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="md:w-3/4 bg-white mb-16">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-colorRojo text-text32 font-extrabold">{{ $servicio->title }}</h2>
                        <h3 class="text-text32 font-semibold mb-4">{{ $servicio->subtitle }}</h3>
                    </div>
                    <a href="#"
                        class="bg-[#0E1D42]  hover:bg-[#0E1D42] text-white font-semibold py-3 rounded-full px-5 text-base">Cotiza
                        tu Plan</a>
                </div>

                <div class="mb-8">
                    <img src="https://s3-alpha-sig.figma.com/img/bef5/bb24/2fa5df3ee43127653a3acfc33e66e954?Expires=1738540800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eq2u1hmqrlxw1Rmq54FtH6uOkwuTV1tcL04PAD0Je5rNy~4ES5j01bFvix7Tv~Bm5W1Ye2cJftwRk5yWBLrXsFfbXS1mfBLBac4BD6~FIRXYPHR8PDKnGPrk~AbNwFDpFm1CHeYK2PoVuzNMgGDXlg4nYzKxyVuFy8zpsBsfhJ9QPb9j1bSaAvFDFvmnlpQKnRk8mrV0Taa5vsGX4jpjsn1yqXhA1BMlhPkd92z8h~qEM5K11awbTp7mqXT6vIPFTl3yH5RIbbSjfuwHDkFP-fL8JAODc2rI78YGem5tVaK4vgIs3G55lu2jQ1kejIdEHeBw5tet-lHYKjssSyWCXA__"
                        alt="Service" class="w-full h-[472px] object-cover rounded-lg">
                </div>
                <div id="descripcion_extensa" class="text-colorParrafo text-text18">
                    {!! $servicio->descripcion_extensa !!}
                </div>


                <!-- Benefits Section -->
                <x-custom.servicio-beneficio :text="$servicio->beneficios" :icono="$servicio->icono" />

                <!-- Call to Action -->
                <div class="text-start mt-8">
                    <a href="#"
                        class="bg-colorBackgroundAzul rounded-full text-white py-3 px-6  hover:bg-colorBackgroundAzulOscuro">Cotizar
                        Servicio</a>
                </div>
            </main>
        </div>


    </main>







@section('scripts_importados')


@stop

@stop
