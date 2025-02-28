@props(['product'])

<div class="group w-max px-2  flex-shrink-0 font-font-general cursor-pointer transition-all duration-300">
    <div class="bg-white rounded-xl ">
        <!-- Imagen del producto y etiqueta de descuento -->
        <div class="relative overflow-hidden">

            <div class="relative group aspect-square overflow-hidden flex items-center rounded-xl justify-center">
                @if (isset($product['discount']) && is_numeric($product['discount']))
                    <div
                        class="absolute top-2 right-2 bg-[#212529] z-50 text-white text-base font-medium px-3  rounded-2xl">
                        <span class="text-[12.09px] leading-[15.72px]">Ahorras</span>

                        <div class="flex items-center  gap-1">
                            <img src="https://i.ibb.co/S7R3V0tf/image.png" class="w-3 mb-1" />
                            <p class="text-[16.08px] leading-[20.9px] font-bold">
                                S/ {{ number_format($product['price'] - $product['discount']) }}
                            </p>
                        </div>
                    </div>
                @endif

                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                    class="w-[346.38px] h-[346.38px] object-cover  group-hover:brightness-100 transition-all duration-300"
                    loading="lazy" />
                <div
                    class=" absolute bottom-0 rounded-xl left-0 w-full h-full bg-[#00000080] group-hover:bg-transparent transition-colors duration-300">
                </div>
            </div>
        </div>

        <!-- Información del producto -->
        <div class="p-4  ">

            <div class="flex justify-between">
                <h3 class=" text-[29.44px] leading-[41.64px] text-[#212529] font-semibold  line-clamp-2">
                    {{ $product['name'] }}
                </h3>
                <span class=" text-[32.56px] leading-[39.79px] font-bold text-[#FC58BE]">
                    S/ {{ number_format($product['final_price'], 2) }}
                </span>

            </div>

            <!-- Precio -->
            <div class="flex justify-between items-baseline gap-2 ">
                <h4 class=" text-[16.28px] text-[#212529]    line-clamp-2 leading-[29.18px]">
                    ({{ $product['description'] }})
                </h4>
                @if (isset($product['discount']) && is_numeric($product['discount']))
                    <span class="text-[16.8px] text-[#9F9F9F]  line-through">
                        S/{{ number_format($product['price'], 2) }}
                    </span>
                @endif

            </div>
        </div>
    </div>
</div>
