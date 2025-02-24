<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('homeview.update', $homeview->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=" bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Editar Contenido
                        del Landing Page</h2>
                </header>
                @if (session('success'))
                    <script>
                        window.onload = function() {
                            mostrarAlerta();
                        }
                    </script>
                @endif
                <div class="p-3">
                    <div class="px-4">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">
                            <h2
                                class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                Sección 1: Portada</h2>

                            <div class="md:col-span-5">
                                <label for="titleHero">Titulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="titleHero" name="titleHero"
                                        value="{{ $homeview->titleHero }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="subtitleHero">Subtitulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="subtitleHero" name="subtitleHero"
                                        value="{{ $homeview->subtitleHero }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <h2 class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl w-full">
                                Sección 2: Servicios</h2>
                            <div class="md:col-span-5">
                                <label for="titleServicios">Titulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="titleServicios" name="titleServicios"
                                        value="{{ $homeview->titleServicios }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="subtitleServicios">Subtitulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="subtitleServicios" name="subtitleServicios"
                                        value="{{ $homeview->subtitleServicios }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>
                            <h2
                                class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                Sección 3: Productos</h2>

                            <div class="md:col-span-5">
                                <label for="titleProductos">Titulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="titleProductos" name="titleProductos"
                                        value="{{ $homeview->titleProductos }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="subtitleProductos">Subtitulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="subtitleProductos" name="subtitleProductos"
                                        value="{{ $homeview->subtitleProductos }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>



                            <h2
                                class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                Sección 4 - Blogs</h2>


                            <div class="md:col-span-5">
                                <label for="titleBlogs">Titulo</label>
                                <div class="relative mb-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="titleBlogs" name="titleBlogs"
                                        value="{{ $homeview->titleBlogs }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="subtitleBlogs">Subtitulo</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="subtitleBlogs" name="subtitleBlogs"
                                        value="{{ $homeview->subtitleBlogs }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>

                            <h2
                                class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                Sección 5 - Newsletter</h2>


                            <div class="md:col-span-5">
                                <label for="titleNewsletter">Titulo - Texto blanco</label>
                                <div class="relative mb-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="w-6 text-gray-500 fas fa-edit"></i>
                                    </div>
                                    <input type="text" id="titleNewsletter" name="titleNewsletter"
                                        value="{{ $homeview->titleNewsletter }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese el titulo">
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="description">Imagen</label>
                                <div class="relative mb-2 mt-2">
                                    <img src="{{ asset($homeview->imageNewsletter) }}"
                                        class="max-w-xs max-h-48 object-cover  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="imageNewsletter">Actualizar Imagen</label>
                                <div class="relative mb-2  mt-2">
                                    <input id="imageNewsletter" name="imageNewsletter"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                </div>
                            </div>




                            <div class="md:col-span-5 text-right mt-6">
                                <div class="inline-flex items-end">
                                    <button type="submit" id="form_general" onclick="confirmarActualizacion()"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar
                                        datos</button>
                                </div>
                            </div>


                        </div>


                    </div>


                </div>
            </div>
        </form>

    </div>

    <script>
        $('document').ready(function() {

            // Función para mostrar la alerta de confirmación antes de enviar el formulario
            function confirmarActualizacion() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción actualizará los datos.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, actualizar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Envía el formulario si se confirma la acción
                        document.getElementById('form_general').submit();
                    }
                });
            }


            function mostrarAlerta() {
                Swal.fire({
                    title: '¡Actualizado!',
                    text: 'Los datos se han actualizado correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                });
            }


        });
    </script>


</x-app-layout>
