<x-app-layout title="Editar Servicio">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('products.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">
                        Editar Producto
                    </h2>
                </header>
                <div class="flex flex-col gap-2 p-3">
                    <div class="flex gap-2 p-3">
                        <div class="basis-0 md:basis-3/5">
                            <div class="rounded p-4 px-4">
                                <div id='general' class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5 mt-2">
                                        <label for="producto">Producto<span class="text-red-500"> (Obligatorio)
                                            </span></label>
                                        <input type="text" id="producto" name="producto"
                                            value="{{ $producto->producto }}"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    </div>

                                    <div class="md:col-span-5 mt-2">
                                        <label for="extract">Descripción Breve</label>
                                        <textarea id="extract" name="extract"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $producto->extract }}</textarea>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description">Descripción Extensa</label>
                                        <textarea id="description" name="description"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $producto->description }}</textarea>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="especificaciones">Especificaciones</label>
                                        <textarea id="especificaciones" name="especificaciones"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $producto->especificaciones }}</textarea>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="categoria_id">Categoría</label>
                                        <select name="categoria_id"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            <option value="">Seleccionar Categoría</option>
                                            @foreach ($categorias as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $producto->categoria_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="brand_id">Marca</label>
                                        <select name="brand_id"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            <option value="">Seleccionar Marca</option>
                                            @foreach ($marcas as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $producto->brand_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="basis-0 md:basis-2/5">
                            <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-5 rounded p-4 px-4">



                                <!-- Mostrar el PDF actual si existe -->
                                @if ($producto->manuales)
                                    <div class="md:col-span-5">
                                        <div id="pdfPreview" class="mt-2">
                                            <p class="text-gray-700 dark:text-gray-300">Ficha técnica actual:</p>
                                            <embed id="pdfViewer" src="{{ asset($producto->manuales) }}"
                                                type="application/pdf" width="100%" height="400px">
                                            <a href="{{ asset($producto->manuales) }}" target="_blank"
                                                class="text-colorRojo">Ver en pantalla completa</a>
                                        </div>
                                    </div>
                                @endif

                                <script>
                                    function previewNewPDF(event) {
                                        const file = event.target.files[0];
                                        if (file && file.type === "application/pdf") {
                                            const fileURL = URL.createObjectURL(file);
                                            document.getElementById("pdfViewer").src = fileURL;
                                            document.getElementById("pdfPreview").classList.remove("hidden");
                                        }
                                    }
                                </script>

                                <div class="md:col-span-5">
                                    <label for="manuales">Ficha Técnica</label>
                                    <input name="manuales" type="file" accept="application/pdf"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                </div>


                                <div class="md:col-span-5">
                                    <label for="imagen">Imagen Principal (1000x1000px)</label>
                                    <img src="{{ asset($producto->imagen) }}"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="imagen">Actualizar Imagen Principal (1000x1000px)</label>
                                    <input id="imagen" name="imagen" type="file" accept="image/*"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                </div>


                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox"
                                            class="  relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                            id='destacado' name='destacado'
                                            {{ $producto->destacado ? 'checked' : '' }} />
                                        <label for="destacado" class="ml-4">Producto Destacado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-5 text-right mt-6 flex justify-between px-4 pb-4">
                        <a href="{{ route('products.index') }}"
                            class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>


    </div>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class=" bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">
                    Actualizar Album de Producto
                </h2>
            </header>
            <!-- Incluir el segundo template para agregar imágenes -->
            <div class="flex flex-col gap-2 p-3 w-full">

                <div class="rounded p-4 px-4">
                    <div class="w-full">
                        @include('components.custom.edit-producto-images', ['album' => $album])
                    </div>
                </div>


            </div>
        </div>
    </div>


    @include('_layout.scripts')
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


            tinymce.init({
                selector: 'textarea#especificaciones',
                height: 300,
                plugins: [
                    'lists'
                ],
                toolbar: 'bullist numlist| ',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px;}'
            });

        })
    </script>

</x-app-layout>
