@extends('components.public.matrix')

@section('css_importados')
    <style>
        .slider-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 24px;
        }

        .slider-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .slider-header h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .slider {
            position: relative;
            width: 100%;
            height: 6px;
            background-color: #e5e7eb;
            border-radius: 9999px;
        }

        .slider-range {
            position: absolute;
            height: 100%;
            background-color: #ef4444;
            border-radius: 9999px;
        }

        .slider-thumb {
            position: absolute;
            top: -6px;
            width: 16px;
            height: 16px;
            background-color: #ffffff;
            border: 2px solid #ef4444;
            border-radius: 50%;
            cursor: pointer;
        }

        .price-values {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
        }
    </style>
@stop

@section('content')
    <main class="pt-36 w-full gap-12">

        <section class="flex flex-col gap-4 items-center justify-center max-w-2xl mx-auto px-5">
            <h2 class="text-text40 font-semibold text-colorAzulOscuro text-center">Optimiza tu red con los <span
                    class="text-colorRojo">mejores equipos</span>
                del mercado</h2>
            <p class="text-colorParrafo text-text16">Encuentra la tecnología que tu empresa necesita</p>
        </section>


        <div class="max-w-7xl flex flex-col md:flex-row md:gap-10 mx-auto py-12  ">
            <aside class="flex flex-col gap-10 w-3/12">

                <div class="hidden-categoria-precio">
                    <div class="hidden md:flex flex-col gap-10 show-categoria-precio">


                        <div>
                            <div class="relative">
                                <div class="mx-auto">
                                    <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                                                <span class="font-boldDisplay text-text14 text-[#151515]">
                                                    Rango por Precio
                                                </span>
                                                <span class="transition group-open:rotate-180">
                                                    <svg width="14" height="14" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <div class="group-open:animate-fadeIn mt-5">
                                                <div class="slider-container">

                                                    <div class="slider-wrapper">
                                                        <div class="slider">
                                                            <div class="slider-range"></div>
                                                            <div class="slider-thumb" id="thumb-left"></div>
                                                            <div class="slider-thumb" id="thumb-right"></div>
                                                        </div>
                                                        <div class="price-values">
                                                            <span id="price-min-span">s/ 0.00</span>
                                                            <span id="price-max-span">s/ 0.00</span>

                                                        </div>

                                                        <input type="number" id="price-min" class="absolute opacity-0">
                                                        <input type="number" id="price-max" class="absolute opacity-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </details>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="relative">
                                <div class="mx-auto">
                                    <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                                                <span class="font-boldDisplay text-text14 text-[#151515]">
                                                    Marcas
                                                </span>
                                                <span class="transition group-open:rotate-180">
                                                    <svg width="14" height="14" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <div class="group-open:animate-fadeIn mt-5">
                                                <div class="flex flex-col gap-2 text-text18 xl:text-text20">



                                                    @foreach ($brands as $brand)
                                                        <div class="flex justify-between py-4 brand-item"
                                                            data-brand-id="{{ $brand->id }}">
                                                            <!-- Label con estilos dinámicos -->
                                                            <label for="brand-{{ $brand->id }}"
                                                                class="flex items-center cursor-pointer w-full justify-between">
                                                                <!-- Input Checkbox -->
                                                                <input type="checkbox" id="brand-{{ $brand->id }}"
                                                                    class="hidden peer brand-checkbox"
                                                                    value="{{ $brand->id }}" />

                                                                <!-- Texto del Label -->
                                                                <span
                                                                    class=" text-sm font-semibold text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                                                    {{ $brand->nombre }}
                                                                </span>


                                                                <!-- Visual del Checkbox -->
                                                                <div
                                                                    class="text-transparent w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">

                                                                    <i class="fa-solid fa-check fa-xs"></i>

                                                                </div>


                                                            </label>
                                                        </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- modal filtros -->
            <!-- <a class="mostrar-modal">Filtrossss</a> -->

            <div class="w-9/12">
                <div class="flex justify-between items-start pb-8">
                    <div class=" flex gap-2">
                        <div class="">
                            <p class=" text-text12 ">
                                Inicio /
                            </p>

                        </div>

                        <div class="">
                            <h3 class=" text-text12 text-colorRojo">

                                Productos /

                            </h3>
                        </div>
                    </div>




                    <div class="relative inline-block text-left short-filter">
                        <div>
                            <button type="button"
                                class="inline-flex w-56 justify-between text-text14 font-semibold gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm text-colorAzulOscuro ring-0 ring-inset"
                                id="menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
                                Ordenar por
                                <svg class="-mr-1 size-5 text-gray-400 transition-transform duration-200" id="arrow-icon"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden absolute right-0 z-10 mt-2 w-64 origin-top-right rounded-md bg-white ring-1 ring-black/5 focus:outline-hidden shadow-2xl"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            id="dropdown-menu">
                            <div class="py-1 m-4" role="none">
                                <!-- Opciones de ordenamiento -->
                                <div class="flex justify-between py-4 sort-item" data-sort-by="default">
                                    <label for="filter-defecto"
                                        class="flex items-center cursor-pointer w-full justify-between">
                                        <input type="checkbox" id="filter-defecto" class="hidden peer" />
                                        <span
                                            class="text-text14 font-normal text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                            Orden por defecto
                                        </span>
                                        <div
                                            class="w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">
                                            <i class="fa-solid fa-check fa-xs"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="flex justify-between py-4 sort-item" data-sort-by="popular">
                                    <label for="filter-popular"
                                        class="flex items-center cursor-pointer w-full justify-between">
                                        <input type="checkbox" id="filter-popular" class="hidden peer" />
                                        <span
                                            class="text-text14 font-normal text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                            Ordenar por popularidad
                                        </span>
                                        <div
                                            class="w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">
                                            <i class="fa-solid fa-check fa-xs"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="flex justify-between py-4 sort-item" data-sort-by="latest">
                                    <label for="filter-ultimos"
                                        class="flex items-center cursor-pointer w-full justify-between">
                                        <input type="checkbox" id="filter-ultimos" class="hidden peer" />
                                        <span
                                            class="text-text14 font-normal text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                            Orden por los últimos
                                        </span>
                                        <div
                                            class="w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">
                                            <i class="fa-solid fa-check fa-xs"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="flex justify-between py-4 sort-item" data-sort-by="low_to_high">
                                    <label for="filter-menor"
                                        class="flex items-center cursor-pointer w-full justify-between">
                                        <input type="checkbox" id="filter-menor" class="hidden peer" />
                                        <span
                                            class="text-text14 font-normal text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                            Ordenar por precio: bajo a alto
                                        </span>
                                        <div
                                            class="w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">
                                            <i class="fa-solid fa-check fa-xs"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="flex justify-between py-4 sort-item" data-sort-by="high_to_low">
                                    <label for="filter-mayor"
                                        class="flex items-center cursor-pointer w-full justify-between">
                                        <input type="checkbox" id="filter-mayor" class="hidden peer" />
                                        <span
                                            class="text-text14 font-normal text-colorAzulOscuro peer-checked:text-[#ED1B2F]">
                                            Ordenar por precio: alto a bajo
                                        </span>
                                        <div
                                            class="w-5 h-5 flex items-center justify-center border border-[#333F51] rounded-sm bg-white peer-checked:bg-white peer-checked:border-[#ED1B2F] peer-checked:text-colorRojo">
                                            <i class="fa-solid fa-check fa-xs"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listado de productos- -->
                <div id="productList" class="grid grid-cols-3 gap-10">
                    @include('public._listproduct', $productos)
                </div>
            </div>

        </div>

        @include('components.custom.newsletter-section', $home)
    </main>


@section('scripts_importados')
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-menu');
            const arrowIcon = document.getElementById('arrow-icon');

            dropdown.classList.toggle('hidden');

            // Toggle arrow rotation
            if (dropdown.classList.contains('hidden')) {
                arrowIcon.style.transform = 'rotate(0deg)';
            } else {
                arrowIcon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.querySelector('.slider');
            const range = document.querySelector('.slider-range');
            const thumbLeft = document.getElementById('thumb-left');
            const thumbRight = document.getElementById('thumb-right');
            const priceMin = document.getElementById('price-min-span');
            const priceMax = document.getElementById('price-max-span');
            const priceMinI = document.getElementById('price-min');
            const priceMaxI = document.getElementById('price-max');
            let maxPrice = {{ $precioMaximo }};
            let currentRange = [0, {{ $precioMaximo }}];

            const updateSlider = () => {
                const percentLeft = (currentRange[0] / maxPrice) * 100;
                const percentRight = (currentRange[1] / maxPrice) * 100;

                thumbLeft.style.left = `${percentLeft}%`;
                thumbRight.style.left = `${percentRight}%`;
                range.style.left = `${percentLeft}%`;
                range.style.right = `${100 - percentRight}%`;

                priceMin.textContent = `s/ ${currentRange[0].toFixed(2)}`;
                priceMax.textContent = `s/ ${currentRange[1].toFixed(2)}`;
                priceMinI.value = currentRange[0].toFixed(2);
                priceMaxI.value = currentRange[1].toFixed(2);

                // Disparar evento jQuery manualmente
                $('#price-min').trigger('input');
                $('#price-max').trigger('input');
            };

            const onDrag = (event, thumb, index) => {
                const sliderRect = slider.getBoundingClientRect();
                const offsetX = event.clientX - sliderRect.left;
                const percent = Math.min(Math.max(0, offsetX / sliderRect.width), 1);
                const value = Math.round(percent * maxPrice);

                currentRange[index] = index === 0 ?
                    Math.min(value, currentRange[1]) :
                    Math.max(value, currentRange[0]);

                updateSlider();
            };

            thumbLeft.addEventListener('mousedown', () => {
                const moveHandler = (event) => onDrag(event, thumbLeft, 0);
                const upHandler = () => {
                    document.removeEventListener('mousemove', moveHandler);
                    document.removeEventListener('mouseup', upHandler);
                };
                document.addEventListener('mousemove', moveHandler);
                document.addEventListener('mouseup', upHandler);
            });

            thumbRight.addEventListener('mousedown', () => {
                const moveHandler = (event) => onDrag(event, thumbRight, 1);
                const upHandler = () => {
                    document.removeEventListener('mousemove', moveHandler);
                    document.removeEventListener('mouseup', upHandler);
                };
                document.addEventListener('mousemove', moveHandler);
                document.addEventListener('mouseup', upHandler);
            });

            updateSlider();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Captura el click de abrir
            /*  const openModal = document.querySelector(".mostrar-modal"); */
            // Captura al modal que se quiere mostrar
            const modal = document.querySelector(".modal-filtros");
            //Captura el evento de cierre
            const closeModal = document.querySelector(".modal__close-filtro");
            // Captura el body para bloqueo
            const body = document.querySelector(".body");

            const hiddenCategoriaPrecio = document.querySelector(
                ".hidden-categoria-precio"
            );

            const open = document.querySelector(".open");
            const showCategoriaPrecio = document.querySelector(".show-categoria-precio");
            const addCategoriaPrecio = document.querySelector(".addCategoriaPrecio");
            let openModal = null;

            function getWidth() {
                // Corregir el modal !importante
                let width = window.innerWidth;
                if (width < 768) {
                    //Habilita el click para modal
                    open.classList.add("mostrar-modal", "cursor-pointer");
                    openModal = document.querySelector(".mostrar-modal");
                    openModal.addEventListener("click", showModal);
                    hiddenCategoriaPrecio.innerHTML = "";
                } else {
                    // Quita la opcion de click
                    open.classList.remove("mostrar-modal", "cursor-pointer");
                    if (openModal) {
                        openModal.removeEventListener("click", showModal);
                        showCategoriaPrecio.classList.remove("hidden");
                        hiddenCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
                    }
                }
            }

            function showModal(e) {
                e.preventDefault();

                addCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
                hiddenCategoriaPrecio.innerHTML = "";

                modal.classList.add("modal--show-filtro");
                body.classList.add("overflow-hidden");

                modal.style.display = "flex";
            }

            getWidth(); // Se ejecuta por primera vez
            window.addEventListener("resize", getWidth);

            closeModal.addEventListener("click", (e) => {
                e.preventDefault();
                modal.classList.remove("modal--show-filtro");
                body.classList.remove("overflow-hidden");
            });

            function closeModa(event) {
                if (event.target === modal) {
                    modal.classList.remove("modal--show-filtro");
                    body.classList.remove("overflow-hidden");
                    /* hiddenCategoriaPrecio.innerHTML = addCategoriaPrecio.innerHTML; */
                }
            }

            window.addEventListener("click", closeModa);
        });
    </script>
    <script>
        $(document).ready(function() {
            let filters = {
                brands: [],
                priceMin: 0,
                priceMax: {{ $precioMaximo }},
                sort: 'default'
            };

            // Función para aplicar filtros
            function applyFilters() {
                $.ajax({
                    url: '/filter-products',
                    method: 'POST',
                    data: {
                        brands: filters.brands,
                        price_min: filters.priceMin,
                        price_max: filters.priceMax,
                        sort: filters.sort,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#productList').html(response);
                    },
                    error: function(error) {
                        console.error('Error al aplicar filtros:', error);
                    }
                });
            }

            // Evento para marcas
            $('.brand-checkbox').on('change', function() {
                let brandId = $(this).val();
                if ($(this).is(':checked')) {
                    filters.brands.push(brandId);
                } else {
                    filters.brands = filters.brands.filter(id => id != brandId);
                }
                applyFilters();
            });

            // Evento para precios
            $('#price-min, #price-max').on('input', function() {
                filters.priceMin = parseFloat($('#price-min').val());
                filters.priceMax = parseFloat($('#price-max').val());
                applyFilters();
            });

            // Evento para ordenamiento
            $('.sort-item').on('click', function() {
                filters.sort = $(this).data('sort-by');
                applyFilters();
            });
        });
    </script>
@stop
