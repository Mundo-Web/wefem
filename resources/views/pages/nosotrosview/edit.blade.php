<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form id="about-us-form" action="{{ route('nosotrosview.update', $nosotros->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Acerca de
                        Nosotros</h2>
                </header>

                <div class="p-3">

                    <div>

                        <div class="flex items-center justify-center">

                            <div class="rounded  p-4 px-4 w-full">

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">


                                    <div class="col-span-3">
                                        <div class="md:col-span-5">
                                            <label for="title">Titulo</label>
                                            <div class="relative mb-2 ">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="title" name="title"
                                                    value="{{ $nosotros->title }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>



                                        <div class="md:col-span-5">
                                            <label for="breve_historia">Breve historia</label>
                                            <div class="relative mb-2 mt-2">
                                                <div id="breve_historia-editor" class="w-full min-h-[300px]"></div>
                                                <input type="hidden" name="breve_historia" id="breve_historia">
                                            </div>
                                        </div>
                                        <div class="md:col-span-5 ">
                                            <label>Imagen Grupal </label>
                                            <div
                                                class="h-auto mt-2 py-4 flex flex-row justify-center border items-center border-gray-300 rounded-xl bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                                <img src="{{ asset($nosotros->imagen) }}" alt=""
                                                    class="w-full h-auto object-cover ">
                                            </div>

                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="imagen">Actualizar Imagen Grupal</label>
                                            <div class="relative mb-2  mt-2">
                                                <input id="imagen" name="imagen"
                                                    class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    type="file" accept="image/*">
                                            </div>
                                        </div>
                                        <h2
                                            class="md:col-span-5 font-semibold mb-4 text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                            Sección: Sello de Garantía</h2>


                                        <div class="md:col-span-5">
                                            <label for="sello_garantia_titulo">Titulo Sección</label>
                                            <div class="relative mb-2 ">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="sello_garantia_titulo"
                                                    name="sello_garantia_titulo"
                                                    value="{{ $nosotros->sello_garantia_titulo }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>
                                        <div class="md:col-span-5">
                                            <label for="sello_garantia_subtitulo">Subtitulo Sección</label>
                                            <div class="relative mb-2 ">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="sello_garantia_subtitulo"
                                                    name="sello_garantia_subtitulo"
                                                    value="{{ $nosotros->sello_garantia_subtitulo }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>


                                        <div class="md:col-span-5">
                                            <label for="sello_garantia_contenido">Contenido</label>
                                            <div class="relative mb-2 mt-2">
                                                <div id="sello_garantia-editor" class="w-full min-h-[200px]">
                                                </div>
                                                <input type="hidden" name="sello_garantia_contenido"
                                                    id="sello_garantia_contenido">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-2">
                                        <div class="md:col-span-5">
                                            <label for="mision">Misión</label>
                                            <div class="relative mb-2 ">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <textarea type="text" id="mision" name="mision" value=""
                                                    class="mt-1 bg-gray-50 border min-h-36 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">{{ $nosotros->mision }}</textarea>
                                            </div>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="vision">Visión</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <textarea type="text" id="vision" name="vision"
                                                    class="mt-1 bg-gray-50 border border-gray-300 min-h-36 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese la descripcion">{{ $nosotros->vision }}</textarea>
                                            </div>
                                        </div>

                                        <div class="md:col-span-5 ">
                                            <label>Imagen Seccion Misión y Visión </label>
                                            <div
                                                class="h-auto mt-2 py-4 flex flex-row justify-center border items-center border-gray-300 rounded-xl bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                                <img src="{{ asset($nosotros->imagen_vision_mision) }}" alt=""
                                                    class="w-full h-auto object-cover ">
                                            </div>

                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="imagen_vision_mision">Actualizar Imagen</label>
                                            <div class="relative mb-2  mt-2">
                                                <input id="imagen_vision_mision" name="imagen_vision_mision"
                                                    class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    type="file" accept="image/*">
                                            </div>
                                        </div>

                                        <div class="md:col-span-5 ">
                                            <label>Imagen Seccion Nuestra Garantía </label>
                                            <div
                                                class="h-auto mt-2 py-4 flex flex-row justify-center border items-center border-gray-300 rounded-xl bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                                <img src="{{ asset($nosotros->imagen_sello_garantia) }}"
                                                    alt="" class="w-full h-auto object-cover ">
                                            </div>

                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="imagen_sello_garantia">Actualizar Imagen</label>
                                            <div class="relative mb-2  mt-2">
                                                <input id="imagen_sello_garantia" name="imagen_sello_garantia"
                                                    class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>






                                    <div class="md:col-span-5 text-right mt-6">
                                        <div class="inline-flex items-end">
                                            <button type="submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar
                                                datos</button>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote'],
                ['link', 'image', 'video'],

                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }, {
                    'list': 'check'
                }],
                [{
                    'script': 'sub'
                }, {
                    'script': 'super'
                }],
                [{
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    'color': []
                }, {
                    'background': []
                }],

                [{
                    'align': []
                }]
            ];

            // Inicializar Quill para Descripción Extensa
            const quillBreveHistoria = new Quill('#breve_historia-editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Escriba la breve historia aquí...',
                theme: 'snow',
                height: 300
            });
            const quillSelloGrantia = new Quill('#sello_garantia-editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Escriba la descripción aquí...',
                theme: 'snow',
                height: 300
            });


            // 1️⃣ **Recuperar contenido desde la base de datos**
            const BreveHistoriaData = `{!! $nosotros->breve_historia ?? '' !!}`;
            const SelloGarantiaData = `{!! $nosotros->sello_garantia_contenido ?? '' !!}`;

            // 2️⃣ **Insertar contenido en Quill (usar clipboard.dangerouslyPasteHTML)**
            quillBreveHistoria.clipboard.dangerouslyPasteHTML(BreveHistoriaData);
            quillSelloGrantia.clipboard.dangerouslyPasteHTML(SelloGarantiaData);
            // Actualizar los campos ocultos antes de enviar el formulario

            // Obtener los valores de Quill antes de enviar el formulario
            document.getElementById("about-us-form").addEventListener("submit", function() {
                document.getElementById("breve_historia").value = quillBreveHistoria.root.innerHTML;
                document.getElementById("sello_garantia_contenido").value = quillSelloGrantia.root
                    .innerHTML;
            });

        });
    </script>


</x-app-layout>
