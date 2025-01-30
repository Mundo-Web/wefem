<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="w-full mt-8 flex items-center justify-center" href="{{ route('dashboard') }}">
                <img src="{{ asset('images/img/logo/DarTelecom.png') }}" alt="Dar Telecom" class="h-11" />
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group Maestros -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Dar Telecom - Backend</span>
                </h3>
                <ul class="mt-3">

                    <!-- Messages -->
                    <!-- Messages -->
                    <li
                        class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['mensajes'])) {{ 'bg-slate-900' }} @endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['mensajes'])) {{ 'hover:text-slate-200' }} @endif"
                            href="{{ route('mensajes.index') }}">
                            <div class="flex items-center justify-between">
                                <div class="grow flex items-center">
                                    <i class="fa-solid fa-message"></i>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Mensajes</span>
                                </div>
                                <!-- Badge -->
                                <div class="flex flex-shrink-0 ml-2">
                                    @if ($mensajes !== 0)
                                        <span
                                            class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded">
                                            {{ $mensajes }}
                                        </span>
                                    @endif

                                </div>
                            </div>
                        </a>
                    </li>
                    <x-menu.item id="subscripciones" href="{{ route('subscripciones') }}" icon="fas fa-address-card">
                        Subscripciones
                    </x-menu.item>
                    <x-menu.item id="datosgenerales" href="{{ route('datosgenerales.edit', 1) }}"
                        icon="fas fa-undo-alt">
                        Datos Generales
                    </x-menu.item>
                    <x-menu.item id="homeview" href="{{ route('homeview.edit', 1) }}" icon="fas fa-address-card">
                        Landing Page
                    </x-menu.item>
                    <x-menu.item id="nosotrosview" href="{{ route('nosotrosview.edit', 1) }}"
                        icon="fas fa-address-card">
                        Acerca de Nosotros
                    </x-menu.item>

                    <x-menu.item id="servicios" href="{{ route('servicios.index') }}" icon="fas fa-address-card">
                        Servicios
                    </x-menu.item>

                    <x-menu.item id="contactoview" href="{{ route('contactoview.edit', 1) }}"
                        icon="fas fa-address-card">
                        Contacto
                    </x-menu.item>
                    <x-menu.item id="politicas-de-devolucion" href="{{ route('politicas-de-devolucion.edit', 1) }}"
                        icon="fas fa-undo-alt">
                        Politicas de Privacidad
                    </x-menu.item>

                    <x-menu.item id="terminos-y-condiciones" href="{{ route('terminos-y-condiciones.edit', 1) }}"
                        icon="fas fa-undo-alt">
                        Terminos y Condiciones
                    </x-menu.item>

                    <x-menu.item id="testimonios" href="{{ route('testimonios.index') }}" icon="fas fa-address-card">
                        Testimonios
                    </x-menu.item>


                    <x-menu.group title="Productos">
                        <x-menu.item id="categorias" href="{{ route('categorias.index') }}"
                            icon="fas fa-list-alt">Categorías</x-menu.item>
                        <x-menu.item id="marcas" href="{{ route('marcas.index') }}"
                            icon="fas fa-list-alt">Marcas</x-menu.item>
                        {{-- <x-menu.item id="subcategory" href="{{ route('subcategorias.index') }}" icon="fas fa-list-alt">Subcategorías</x-menu.item> --}}
                        {{-- <x-menu.item id="microcategory" href="{{ route('microcategorias.index') }}" icon="fas fa-list-alt">Microcategorías</x-menu.item> --}}
                        <x-menu.item id="product" href="{{ route('products.index') }}"
                            icon="fas fa-pager">Productos</x-menu.item>
                    </x-menu.group>

                    <x-menu.group title="Blogs">
                        <x-menu.item id="categoriasPost" href="{{ route('categoriasPost.index') }}"
                            icon="fas fa-list-alt">Categorías</x-menu.item>
                        <x-menu.item id="blog" href="{{ route('blog.index') }}" icon="fas fa-address-card">
                            Blog
                        </x-menu.item>
                    </x-menu.group>
                </ul>

            </div>

            <!-- Expand / collapse button -->
            <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
                <div class="px-3 py-2">
                    <button @click="sidebarExpanded = !sidebarExpanded">
                        <span class="sr-only">Expand / collapse sidebar</span>
                        <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                            <path class="text-slate-400"
                                d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                            <path class="text-slate-600" d="M3 23H1V1h2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
