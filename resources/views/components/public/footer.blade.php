<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
</style>
<footer class="bg-colorBackgroundAzulOscuro relative  overflow-hidden z-10">
    <div class="absolute left-0   transform  rotate-[60deg] -z-10 ">
        <img src="{{ asset('images/img/background/bg-footer.png') }}" alt="" class="w-full">
    </div>
    <div class="grid grid-cols-1 w-11/12 lg:max-w-7xl mx-auto   py-10 lg:py-16 gap-10 md:gap-5 z-50">
        <div class=" grid grid-cols-1  lg:grid-cols-2  gap-10 lg:gap-5 col-span-1">
            <div>
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/img/logo/DarTelecom.png') }}" class="w-48 h-auto object-cover" />
                </a>
                <p class="text-white mt-8">
                    {{ $general->aboutus }}
                </p>
            </div>
            <div class="grid grid-cols-1  md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-5">

                    <div class="flex flex-col gap-4 text-white font-gotham_light text-base font-bold">
                        <a href="{{ route('index') }}">Inicio</a>
                        <a href="{{ route('nosotros') }}">Nosotros</a>
                        <a href="{{ route('servicios') }}">Servicios</a>
                        <a href="{{ route('catalogo.all') }}">Equipos</a>
                        <a href="{{ route('blog.all') }}">Blogs</a>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </div>
                </div>




                <div class="flex flex-col gap-5 pt-4 border-t-2 md:border-none md:pt-0">

                    <div class="flex flex-col gap-4 text-white font-gotham_light text-base">
                        <a>{{ $general->cellphone }}</a>
                        <a>{{ $general->email }}</a>
                        <a>{{ $general->schedule }}</a>


                        <a> {{ $general->address }} -

                            {{ $general->district }} - {{ $general->city }}</a>


                    </div>
                    <div class="flex gap-4 mt-4">
                        <a target="_blank" href="{{ $general->instagram }}"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-instagram fa-xl"></i>

                        </a>
                        <a target="_blank" href="{{ $general->facebook }}"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-facebook-f fa-xl"></i>
                        </a>
                        <a target="_blank" href="{{ $general->linkedin }}"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-linkedin-in fa-xl"></i>
                        </a>
                        <a target="_blank" href="{{ $general->tiktok }}"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-tiktok fa-xl"></i>
                        </a>
                        <a target="_blank" href="{{ $general->whatsaap }}"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-whatsapp fa-xl"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div
        class="flex flex-col lg:flex-row justify-between items-start  gap-3 w-11/12 lg:max-w-7xl mx-auto py-12 border-t-2 border-white z-50">
        <a href="#" target="_blank" class="text-white  text-sm ">Copyright &copy;
            2025 Dar Telecom.
            Reservados todos los derechos</a>

        <div class="flex w-full justify-between items-center lg:justify-end lg:gap-16 text-white">
            <a class="block cursor-pointer text-text12 lg:text-text16 text-colorParrafo" id="linkTerminos">
                Terminos de servicios
            </a>
            <a class="block cursor-pointer text-text12 lg:text-text16 text-colorParrafo" id="linkPoliticas">
                Políticas de privacidad
            </a>
        </div>
    </div>

    <div id="modalTerminosCondiciones" class="modal" style="max-width: 900px !important;width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-gotham_bold text-2xl text-center">Terminos y condiciones</h1>
            <p class="font-gotham_book p-2 prose">{!! $termsAndCondicitions->content ?? '' !!}</p>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-gotham_bold text-2xl text-center">Politicas de privacidad</h1>
            <p class="font-gotham_book p-2 prose">{!! $politicDev->content ?? '' !!}</p>
        </div>
    </div>
    <div class="md:hidden absolute left-0 bottom-0   transform  rotate-[0deg] -z-10 ">
        <img src="{{ asset('images/img/background/bg-footer.png') }}" alt="" class="w-full">
    </div>
</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticas', function() {
            $('#modalPoliticasDev').modal({
                show: true,
                fadeDuration: 400,
            })
        });
    });
</script>
