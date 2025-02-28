@php
    $catalogo = [
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/1G6ZhSPW/image.png',
        ],
    ];
@endphp


<div class="mx-w-6xl mx-auto px-4 py-8">
    <!-- Header con ordenamiento -->
    <div class="flex justify-end mb-6">
        <div class="relative ">
            <select
                class="appearance-none bg-white border border-[#5F48B7] text-[#5F48B7] py-4 px-4 pr-8 rounded-full leading-tight focus:outline-none ">
                <option>Ordenar por</option>
                <option>Precio: Menor a Mayor</option>
                <option>Precio: Mayor a Menor</option>
                <option>Más vendidos</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="flex  gap-6  ">
        <!-- Sidebar -->
        <div class="w-2/12 ">
            <!-- Categorías -->
            <nav class="mb-8 w-full">
                <h2 class="font-bold text-lg mb-4">Todos los productos</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Copas menstruales</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Discos menstruales</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Accesorios</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Packs</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Promociones</a></li>
                </ul>
            </nav>

            <!-- Banner promocional -->
            <div class="  text-white w-full">
                <img src="https://i.ibb.co/d48x03pk/image.png" class="w-auto h-full object-contain" />
            </div>
        </div>

        <!-- Grid de productos -->
        <div class="w-10/12 grid grid-cols-3 gap-4 gap-y-8">
            <!-- Producto 1 (Con fondo destacado) -->
            @foreach ($catalogo as $product)
                <div class=" rounded-lg">
                    <img src="{{ $product['image'] }}" alt="wePack" class="w-full h-auto object-cover mb-4">

                    <div class="p-6">

                        <div class="flex justify-between">
                            <h3 class=" text-3xl font-semibold mb-2 line-clamp-2">
                                {{ $product['name'] }}
                            </h3>
                            <span class=" text-[32px] font-bold text-[#FC58BE]">
                                S/ {{ number_format($product['price'], 2) }}
                            </span>

                        </div>

                        <!-- Precio -->
                        <div class="flex justify-between items-baseline gap-2  ">
                            <h4 class=" text-base font-semibold mb-2 line-clamp-2">
                                {{ $product['description'] }}
                            </h4>

                            <span class="text-base text-[#9F9F9F] font-semibold1 line-through">
                                S/{{ number_format($product['oferta'], 2) }}
                            </span>


                        </div>
                    </div>

                    <button
                        class="w-full border-2 border-[#FF9900]  text-[#FF9900] font-medium py-4 px-4 rounded-xl transition-colors">
                        ¡Lo quiero!
                    </button>
                </div>
            @endforeach


        </div>
    </div>
</div>
