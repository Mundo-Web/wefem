@props(['product'])

<div
    class="group w-full px-2 sm:w-1/3 lg:w-1/3 flex-shrink-0 font-font-secondary cursor-pointer transition-all duration-300">
    <div class="bg-white rounded-xl ">
        <!-- Imagen del producto y etiqueta de descuento -->
        <div class="relative overflow-hidden">

            <div class="aspect-square  overflow-hidden flex items-center rounded-xl justify-center ">
                @if (isset($product['discount']) && is_numeric($product['discount']))
                    <div
                        class="absolute top-2 right-2 bg-black z-50 text-white text-base font-medium px-3 py-1 rounded-2xl">
                        <span class="text-xs w-full flex justify-center">Ahorras</span>

                        <div class="flex gap-1 items-center text-base font-bold">
                            <img src="https://i.ibb.co/S7R3V0tf/image.png" class="w-3" />
                            S/ {{ number_format($product['price'] - $product['discount']) }}
                        </div>
                    </div>
                @endif

                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                    class="w-full h-auto object-cover brightness-50 group-hover:brightness-100 transition-all duration-300"
                    loading="lazy" />

            </div>
        </div>

        <!-- Información del producto -->
        <div class="p-4  ">

            <div class="flex justify-between">
                <h3 class=" text-3xl font-semibold mb-2 line-clamp-2">
                    {{ $product['name'] }}
                </h3>
                <span class=" text-4xl font-bold text-[#FC58BE]">
                    S/ {{ number_format($product['final_price'], 2) }}
                </span>

            </div>

            <!-- Precio -->
            <div class="flex justify-between items-baseline gap-2  ">
                <h4 class=" text-base font-semibold mb-2 line-clamp-2">
                    ({{ $product['description'] }})
                </h4>
                @if (isset($product['discount']) && is_numeric($product['discount']))
                    <span class="text-base text-[#9F9F9F] font-semibold1 line-through">
                        S/{{ number_format($product['price'], 2) }}
                    </span>
                @endif

            </div>
        </div>
    </div>
</div>
