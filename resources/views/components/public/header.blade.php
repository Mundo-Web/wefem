<header class=" w-full z-40">

    <!--fixed  top-0-->

    <nav id="main-header"
        class="absolute top-0 left-0 w-full {{ request()->routeIs('index') ? 'bg-transparent ' : 'bg-colorBackgroundAzulOscuro' }}  text-white z-10 duration-300 ">


        <div class="w-11/12 md:max-w-7xl mx-auto  flex justify-between items-center py-4">
            <a href="/" class="text-2xl font-bold">
                <img src="{{ asset('images/img/logo/DarTelecom.png') }}" alt="Dar Telecom"
                    class="h-14 w-full object-contain" />
            </a>

            <div class="hidden lg:flex justify-center items-center gap-10 font-semibold text-text18 xl:text-text22">
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
            <div class="lg:hidden flex items-center justify-end">
                <button id="menu-toggle" class="text-white fill-white focus:outline-none">
                    <i id="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="current" width="33" height="34"
                            viewBox="0 0 448 512">
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                        </svg>

                    </i>
                </button>
            </div>
        </div>
    </nav>




    <div class="flex justify-end w-full mx-auto z-[100] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
            <a target="_blank" id="whatsapp-toggle"
                href="https://api.whatsapp.com/send?phone={{ $general?->whatsapp }}&text={{ $general?->mensaje_whatsapp }}">
                <img src="{{ asset('images/img/background/WhatsApp.svg') }}" alt="whatsapp"
                    class="mr-3 w-16 h-16 md:w-[85px] md:h-[85px]">

            </a>
        </div>
    </div>

    <!-- Menú desplegable para móviles -->
    <div id="menu"
        class="hidden lg:hidden bg-colorBackgroundAzulOscuro text-textWhite shadow-lg w-full h-screen absolute z-10">
        <div class="lg:hidden flex items-center w-full justify-end py-8 px-4 sm:p-8">
            <button id="menu-toggle-close" class="text-white fill-white focus:outline-none">
                <i id="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="current" width="33" height="34"
                        viewBox="0 0 448 512">
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                    </svg>

                </i>
            </button>
        </div>
        <nav class="mb-8 flex flex-col justify-center items-center gap-10 text-center w-11/12 md:max-w-6xl mx-auto"
            data-aos="fade-up" data-aos-offset="150">
            <ul class="flex space-y-6 flex-col">
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
        </nav>


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
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menuToggle_close = document.getElementById('menu-toggle-close');
    const menu = document.getElementById('menu');
    const menuIcon = document.getElementById('menu-icon');

    menuToggle.addEventListener('click', function() {
        menu.classList.remove('hidden');

    });
    menuToggle_close.addEventListener('click', function() {
        menu.classList.add('hidden');

    });
</script>
