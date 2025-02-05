<section class="bg-colorBackgroundRed relative">
    <div class="absolute right-0 scale-x-[-1] lg:left-0 top-1/2 transform  -translate-y-1/2 lg:scale-x-[1] ">
        <img src="{{ asset('images/img/background/bg-newsletter.png') }}" alt="" class="w-20">
    </div>
    <div class="w-11/12 lg:max-w-7xl mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-end py-16"
        data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="200">
        <p class="w-11/12 lg:w-1/3 text-text32 text-white"><x-custom.texto-titulo :text="$home->titleNewsletter" style="font-bold" />
        </p>
        <form action="{{ route('subscripciones.guardar') }}" method="POST"
            class="w-11/12 lg:w-1/3 flex items-center justify-center relative border-b-2 border-white py-2">
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
