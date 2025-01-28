<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
</style>
<footer class="bg-colorBackgroundAzulOscuro relative -z-20">
    <div class="absolute left-0   transform  rotate-[60deg] -z-10">
        <img src="{{ asset('images/img/background/bg-footer.png') }}" alt="" class="w-full">
    </div>
    <div class="grid grid-cols-1 max-w-7xl mx-auto   py-10 lg:py-16 gap-10 md:gap-5">
        <div class=" grid  grid-cols-2  gap-10 lg:gap-5 col-span-1" data-aos="fade-up" data-aos-offset="150">
            <div>
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/img/logo/DarTelecom.png') }}" class="w-48 h-auto object-cover" />
                </a>
                <p class="text-white mt-8">
                    Donec ac sapien bibendum, fringilla erat ut, elementum est. Sed condimentum leo lacus, in maximus
                    dui pulvinar vel.
                </p>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-5">

                    <div class="flex flex-col gap-4 text-white font-gotham_light text-base font-bold">
                        <a href="{{ route('index') }}">Inicio</a>
                        <a href="{{ route('nosotros') }}">Nosotros</a>
                        <a href="{{ route('index') }}#beneficios">Beneficios</a>
                        <a href="{{ route('index') }}#planes">Planes de internet</a>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </div>
                </div>




                <div class="flex flex-col gap-5">

                    <div class="flex flex-col gap-4 text-white font-gotham_light text-base">
                        <a>+51 945 622 982</a>
                        <a>soporte@dartelecom.com</a>
                        <a>De lunes a viernes - 10 am a 7pm</a>
                        <a>Calle Nicanor Rocca de Vergallo
                            493 Magdalena del Mar
                            Lima -Perú</a>
                    </div>
                    <div class="flex gap-4">
                        <a target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="flex justify-between items-center gap-3 max-w-7xl mx-auto py-12 border-t-2 border-white">
        <a href="#" target="_blank" class="text-white font-gotham_medium  text-sm text-center">Copyright &copy;
            2025 Redconex Soluciones.
            Reservados todos los derechos</a>

        <div class="flex justify-end gap-16 text-white">
            <a class=" ">
                Terminos de servicios
            </a>
            <a class="">
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
