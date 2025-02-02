<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach ($beneficios as $index => $beneficio)
        <div data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200"
            class=" cursor-pointer bg-colorBackgroundAzulClaro p-6 text-start flex flex-col items-start rounded-xl">
            <div class=" h-10 w-10 bg-colorBackgroundRed"
                style="mask-image: url('{{ asset($icono) }}'); mask-size: cover; mask-repeat: no-repeat;"">
            </div>
            <h4 class="font-semibold mb-2 text-colorAzulOscuro text-text28">Beneficio {{ $index + 1 }}</h4>
            <p class="text-colorParrafo text-text16">{{ $beneficio }}</p>
        </div>
    @endforeach






</div>
