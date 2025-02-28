@php
    $catalogo = [
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/RGSHTWDw/image-removebg-preview.png',
        ],
    ];
@endphp


<div class=" px-[5%]  mx-auto py-8">
    <!-- Header con ordenamiento -->
    <div class="flex  justify-end mb-6">
        <div class="relative ">
            <select
                class="appearance-none h-[46px] bg-white border border-[#5F48B7] text-[#5F48B7] px-4 pr-8 rounded-full focus:ring-0 leading-tight focus:outline-none focus:border-[#5F48B7]">
                <option>Ordenar por</option>
                <option>Precio: Menor a Mayor</option>
                <option>Precio: Mayor a Menor</option>
                <option>Más vendidos</option>
            </select>

        </div>
    </div>

    <div class="flex  mx-auto gap-6  ">
        <!-- Sidebar -->
        <div class="w-[325px] ">
            <!-- Categorías -->
            <nav class="mb-8 w-full text-[23.67px] leading-[26.52px] text-[#000000] border-b pb-8 border-b-[#000000]">
                <h2 class="font-bold text-[#000000] text-[23.67px] leading-[26.52px] mb-4 underline">Todos los productos
                </h2>
                <ul class="space-y-3">
                    <li><a href="#" class=" ">Copas menstruales</a></li>
                    <li><a href="#" class=" ">Discos menstruales</a></li>
                    <li><a href="#" class=" ">Accesorios</a></li>
                    <li><a href="#" class="">Packs</a></li>
                    <li><a href="#" class="">Promociones</a></li>
                </ul>
            </nav>

            <!-- Banner promocional -->
            <div class="  text-white w-full">
                <img src="https://i.ibb.co/d48x03pk/image.png" class="w-[323px] h-[375px] object-cover" />
            </div>
        </div>

        <!-- Grid de productos -->
        <div class="w-full grid grid-cols-3 gap-4 gap-y-8">
            <!-- Producto 1 (Con fondo destacado) -->
            @foreach ($catalogo as $product)
                <div class=" rounded-lg w-full group cursor-pointer ">
                    <img src="{{ $product['image'] }}" alt="wePack"
                        class="bg-[#FAFAFA] w-full h-auto object-cover mb-4 group-hover:bg-[#FF9900] transition-colors duration-300">

                    <div class="px-6 text-[#212529]">

                        <div class="flex justify-between">
                            <h3 class=" text-[29.44px] leading-[41.64px] font-semibold  line-clamp-2">
                                {{ $product['name'] }}
                            </h3>
                            <span
                                class=" md:text-[25.56px] xl:leading-[39.79px] 2xl:text-[32.56px] tracking-[-0.01em] font-bold text-[#FC58BE]">
                                S/ {{ number_format($product['price'], 2) }}
                            </span>

                        </div>

                        <!-- Precio -->
                        <div class="flex justify-between items-baseline gap-2  ">
                            <h4 class=" text-[16.28px] leading-[29.18px] font-normal mb-2 line-clamp-2">
                                {{ $product['description'] }}
                            </h4>

                            <span class="text-[16.8px] text-[#9F9F9F] font-semibold1 line-through leading-[21.84px]">
                                S/{{ number_format($product['oferta'], 2) }}
                            </span>


                        </div>
                        <a href="/producto"
                            class="bolck w-full flex gap-2 items-center justify-center fill-[#FF9900]  border-2 border-[#FF9900]  text-[#FF9900] font-medium py-4 px-4 rounded-xl group-hover:bg-[#FF9900] group-hover:fill-[#FFFFFF] group-hover:text-white transition-colors duration-300">
                            ¡Lo quiero!
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14"
                                fill="currrent">
                                <path
                                    d="M16.4986 7.82554C16.8518 7.47235 16.8518 6.89972 16.4986 6.54653L10.743 0.791003C10.3899 0.437815 9.81723 0.437815 9.46404 0.791003C9.11086 1.14419 9.11086 1.71682 9.46404 2.07001L14.5801 7.18604L9.46404 12.3021C9.11086 12.6552 9.11086 13.2279 9.46404 13.5811C9.81723 13.9343 10.3899 13.9343 10.743 13.5811L16.4986 7.82554ZM0.484375 8.09043H15.8591V6.28164H0.484375V8.09043Z"
                                    fill="current" />
                            </svg>
                        </a>
                    </div>


                </div>
            @endforeach


        </div>
    </div>
</div>
