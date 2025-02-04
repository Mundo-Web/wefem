<header class=" w-full z-40">

    <!--fixed  top-0-->

    <nav id="main-header"
        class="absolute top-0 left-0 w-full {{ request()->routeIs('index') ? 'bg-transparent ' : 'bg-colorBackgroundAzulOscuro' }}  text-white z-10 duration-300 ">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4">
            <a href="#" class="text-2xl font-bold">
                <img src="{{ asset('images/img/logo/DarTelecom.png') }}" alt="Dar Telecom"
                    class="h-14 w-full object-cover" />
            </a>

            <ul class="flex space-x-6">
                <li>
                    <x-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')">
                        Inicio</x-nav-link>

                </li>
                <li>
                    <x-nav-link href="{{ route('nosotros') }}" :active="request()->routeIs('nosotros')">
                        Nosotros</x-nav-link>

                </li>
                <li>
                    <x-nav-link href="{{ route('servicios') }}" :active="request()->routeIs('servicios')">
                        Servicios</x-nav-link>

                </li>

                <li>
                    <x-nav-link href="{{ route('catalogo.all') }}" :active="request()->routeIs('catalogo.all')">
                        Equipos</x-nav-link>

                </li>
                <li>
                    <x-nav-link href="{{ route('blog.all') }}" :active="request()->routeIs('blog.all')">
                        Blog</x-nav-link>

                </li>
                <li>
                    <x-nav-link href="{{ route('contacto') }}" :active="request()->routeIs('contacto')">
                        Contacto</x-nav-link>

                </li>

            </ul>

            <x-custom.button-cotizar :general="$general" />
        </div>
    </nav>



    <div class="flex justify-end w-full mx-auto z-[100] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
            <a target="_blank" id="whatsapp-toggle"
                href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}">
                <img src="{{ asset('images/svg/wsp.svg') }}" alt="whatsapp"
                    class="mr-3 w-16 h-16 md:w-[85px] md:h-[85px]">
            </a>
        </div>
    </div>


</header>



<script>
    /*function applyScrollStyles() {
        const header = document.getElementById('main-header');
        const logo = document.getElementById('imagenlogo');

        if (window.scrollY > 50) {


            header.classList.add('bg-colorBackgroundAzulOscuro');
            header.classList.remove('bg-transparent');


        } else {
            header.classList.add('bg-transparent');
            header.classList.remove('bg-colorBackgroundAzulOscuro');



        }
    }*/

    window.addEventListener('DOMContentLoaded', applyScrollStyles);
    window.addEventListener('scroll', applyScrollStyles);
</script>
