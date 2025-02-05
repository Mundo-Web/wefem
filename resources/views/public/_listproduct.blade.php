@foreach ($productos as $item)
    <div class="bg-colorBackgroundAzulClaro h-max p-4 shadow-md text-start group cursor-pointer rounded-xl">
        <div class="mb-4 w-full h-[92px] md:h-[212px] bg-white rounded-xl">
            <img src="{{ asset($item->imagen) }}" alt="{{ $item->producto }}" class=" w-full h-full object-contain">
        </div>
        <h3 class="text-text14 md:text-text28 font-semibold mb-2 text-colorAzulOscuro">{{ $item->producto }}</h3>
        <p class="text-colorParrafo mb-4 text-text10 md:text-text16 line-clamp-2">{{ $item->extract }}</p>
        <a href="{{ route('producto', $item->slug) }}"
            class="text-text10 md:text-text16 group-hover:w-full duration-300 ease-in-out group-hover:text-center group-hover:bg-colorBackgroundAzul bg-colorBackgroundRed  rounded-full text-white font-semibold px-4 py-2 inline-block">Ver
            más</a>
    </div>
@endforeach
