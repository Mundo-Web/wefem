<x-app-layout title="Editar Blog">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form id="blog-form" action="{{ route('blog.update', $blog->id) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input name="id" type="hidden" value={{ $blog->id }}></input>
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Edición de
                        post:
                        {{ $blog->titulo }}</h2>
                </header>

                <div class="p-3">
                    <div class="rounded shadow-lg p-4 px-4 ">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="titulo">Título de post</label>
                                <div class="relative mb-2  mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="titulo" name="titulo" value="{{ $blog->titulo }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Título">
                                </div>
                            </div>



                            <div class="md:col-span-5">
                                <label for="category_post_id">Categoría de post</label>
                                <div class="relative mb-2 mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-solid fa-list-ul"></i>
                                    </div>
                                    <select type="text" rows="2" id="category_post_id" name="category_post_id"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $blog->category_post_id ? 'selected' : '' }}>
                                                {{ $category->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="md:col-span-5">

                                <label for="extracto">Extracto de post</label>
                                <div class="relative mb-2 mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <textarea type="text" rows="2" name="extracto" value="" id="extracto"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Extracto">{{ $blog->extracto }}</textarea>
                                </div>
                            </div>



                            <div class="md:col-span-5">
                                <label for="description">Imagen de servicio (808x445 px)</label>
                                <div class="relative mb-2 mt-2">
                                    <img src="{{ asset($blog->imagen) }}"
                                        class="max-w-xs max-h-48 object-cover  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="imagen">Imagen principal</label>
                                <div class="relative mb-2  mt-2">
                                    <input id="imagen" name="imagen"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="descripcion">Descripción Extensa</label>
                                <div class="relative mb-2 mt-2">
                                    <div id="description-editor" class="w-full min-h-[200px]"></div>
                                    <input type="hidden" name="descripcion" id="descripcion">
                                </div>
                            </div>



                            <div class="md:col-span-5 text-right mt-6 flex justify-between">
                                <div class="inline-flex items-end">
                                    <a href="{{ URL::previous() }}"
                                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                                </div>
                                <div class="inline-flex items-end">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar</button>
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
            const quillDescription = new Quill('#description-editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Escriba la descripción aquí...',
                theme: 'snow',
                height: 300
            });



            // 1️⃣ **Recuperar contenido desde la base de datos**
            const descriptionData = `{!! $blog->descripcion ?? '' !!}`;


            // 2️⃣ **Insertar contenido en Quill (usar clipboard.dangerouslyPasteHTML)**
            quillDescription.clipboard.dangerouslyPasteHTML(descriptionData);


            // Obtener los valores de Quill antes de enviar el formulario
            document.getElementById("blog-form").addEventListener("submit", function() {
                document.getElementById("descripcion").value = quillDescription.root.innerHTML;

            });
        });
    </script>


</x-app-layout>
