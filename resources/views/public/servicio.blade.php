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

        /* En tu archivo CSS */
        aside nav ul li.active {
            background-color: #ed1b2f;
            /* Color de fondo para el elemento activo */
            color: white;
            /* Color de texto para el elemento activo */
        }

        aside nav ul li.active div {
            background-color: #FFFFFF;
            /* Color de fondo para el elemento activo */


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
                <h1 class="text-colorAzulOscuro text-text48 font-bold" data-aos="fade-up" data-aos-offset="150"
                    data-aos-duration="1000" data-aos-delay="200">
                    <x-custom.texto-titulo :text="$servicioPage->titulo" style="text-colorRojo" />
                </h1>
            </div>
            <p class="text-colorParrafo text-text16 my-8 ">
                {{ $servicioPage->subtitulo }}
            </p>
        </section>

        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="md:w-1/4">
                <nav class="">
                    <ul class="flex gap-4 flex-col" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000"
                        data-aos-delay="200">
                        @foreach ($servicios as $index => $servicio)
                            <li data-id="{{ $servicio->id }}"
                                class="cursor-pointer group rounded-xl flex items-center gap-4 p-4 text-text20 font-semibold bg-colorBackgroundAzulClaro hover:bg-colorBackgroundRed text-colorAzulOscuro hover:text-white transition-all duration-300 {{ $index === 0 ? 'active' : '' }}">
                                <div class="group-hover:hidden h-7 w-7 bg-black"
                                    style="mask-image: url('{{ asset($servicio->icono) }}'); mask-size: contain; mask-repeat: no-repeat;">
                                </div>
                                <div class="hidden group-hover:inline-block h-7 w-7 bg-white"
                                    style="mask-image: url('{{ asset($servicio->icono) }}'); mask-size: contain; mask-repeat: no-repeat;">
                                </div>
                                <a href="#" class="servicio-link">{{ $servicio->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="md:w-3/4 bg-white mb-16" id="main-content" data-aos="fade-up" data-aos-offset="150"
                data-aos-duration="1000" data-aos-delay="200">
                <!-- El contenido del primer servicio se mostrará por defecto -->

                @include('components.custom.component-servicio', $servicio)


            </main>
        </div>


    </main>







@section('scripts_importados')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarItems = document.querySelectorAll('aside nav ul li');
            const mainContent = document.getElementById('main-content');

            // Función para cargar el contenido del servicio
            function loadServicioContent(servicioId) {
                fetch(`/servicios/${servicioId}`)
                    .then(response => response.text())
                    .then(data => {
                        mainContent.innerHTML = data;
                    })
                    .catch(error => console.error('Error al cargar el servicio:', error));
            }

            // Manejar el clic en los elementos del sidebar
            sidebarItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remover la clase 'active' de todos los elementos
                    sidebarItems.forEach(i => i.classList.remove('active'));

                    // Agregar la clase 'active' al elemento seleccionado
                    item.classList.add('active');

                    // Obtener el ID del servicio y cargar su contenido
                    const servicioId = item.getAttribute('data-id');
                    loadServicioContent(servicioId);
                });
            });

            // Cargar el contenido del primer servicio por defecto
            if (sidebarItems.length > 0) {
                const firstItem = sidebarItems[0];
                const servicioId = firstItem.getAttribute('data-id');
                loadServicioContent(servicioId);
            }
        });
    </script>

@stop

@stop
