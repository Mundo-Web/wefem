<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('nosotrosview.update', $nosotros->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Acerca de
                        Nosotros</h2>
                </header>
                @if (session('success'))
                    <script>
                        window.onload = function() {
                            mostrarAlerta();
                        }
                    </script>
                @endif
                <div class="p-3">

                    <div>

                        <div class="flex items-center justify-center">

                            <div class="rounded  p-4 px-4 w-full">

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">


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
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="breve_historia" name="breve_historia" value=""
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese texto">{{ $nosotros->breve_historia }}</textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="mision">Misión</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="mision" name="mision" value=""
                                                class="mt-1 bg-gray-50 border min-h-20 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $nosotros->vision }}</textarea>
                                        </div>
                                    </div>


                                    <div class="md:col-span-5 ">
                                        <label>Imagen Grupal </label>
                                        <div
                                            class="h-40 mt-2 py-4 flex flex-row justify-center border items-center border-gray-300 rounded-xl bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            <img src="{{ asset($nosotros->imagen) }}" alt=""
                                                class="w-full h-full object-cover ">
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


                                    <div class="md:col-span-5">
                                        <label for="cultura_trabajo">Cultura de Trabajo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="cultura_trabajo" name="cultura_trabajo"
                                                class="mt-1 min-h-36 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $nosotros->cultura_trabajo }}</textarea>
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
                </div>
            </div>
        </form>

    </div>

    <script>
        $('document').ready(function() {

            tinymce.init({
                selector: 'textarea#breve_historia',
                height: 500,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
                    'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'table'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px;}'
            });

        })
    </script>


</x-app-layout>
