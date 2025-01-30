<x-app-layout title="Editar Servicio">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('servicios.update', $servicios->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Edición del
                        servicio:
                        {{ $servicios->title }}</h2>
                </header>

                <div class="p-3">
                    <div class="rounded shadow-lg p-4 px-4 ">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div class="md:col-span-5">
                                <label for="title">Título del servicio</label>
                                <div class="relative mb-2  mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="title" name="title" value="{{ $servicios->title }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Titulo">
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="title">Subtítulo del servicio</label>
                                <div class="relative mb-2  mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="subtitle" name="subtitle"
                                        value="{{ $servicios->subtitle }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Subtitulo">
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <label for="description">Icono del servicio</label>
                                <div class="relative mb-2 mt-2">
                                    <div class=" h-10 w-10 bg-colorBackgroundAzulOscuro"
                                        style="mask-image: url('{{ asset($servicios->icono) }}'); mask-size: cover; mask-repeat: no-repeat;"">
                                    </div>
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="icono">Actualizar Icono</label>
                                <div class="relative mb-2  mt-2">

                                    <input name="icono"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="icono" type="file" accept="image/svg+xml">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="descripcion_breve">Descripcion Breve del servicio</label>
                                <span class="text-colorRojo ml-4 text-xs">( Menciona a la brevedad sobre el servicio
                                    )</span>
                                <div class="relative mb-2 mt-2">
                                    <div
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none top-0">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <textarea type="text" rows="2" id="descripcion_breve" name="descripcion_breve" value=""
                                        class="mt-1 min-h-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Descripción Breve">{{ $servicios->descripcion_breve }}</textarea>
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="beneficios">Beneficios del servicio</label>
                                <span class="text-colorRojo ml-4 text-xs">( Menciona los beneficios separados por
                                    punto y coma ";")</span>
                                <div class="relative mb-2 mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <textarea type="text" rows="2" id="beneficios" name="beneficios" value=""
                                        class="mt-1 min-h-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ej. Implementación rápida, Soporte técnico prioritario ">{{ $servicios->beneficios }}</textarea>
                                </div>

                            </div>

                            <div class="md:col-span-5">
                                <label for="description">Descripcion Extensa del servicio</label>
                                <div class="relative mb-2 mt-2">
                                    <textarea type="text" rows="2" id="description" name="descripcion_extensa" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Descripción">{{ $servicios->descripcion_extensa }}</textarea>
                                </div>
                            </div>

                            <div class="md:col-span-5 text-right mt-6 flex justify-between">
                                <div class="inline-flex items-end">
                                    <a href="{{ URL::previous() }}"
                                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                                </div>
                                <div class="inline-flex items-end">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar
                                    </button>
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
                selector: 'textarea#description',
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
