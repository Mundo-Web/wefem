<x-app-layout title="Crear Producto">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">

                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">
                        Agregar Producto
                    </h2>
                </header>
                <div class="flex flex-col gap-2 p-3 ">
                    <div class="flex gap-2 p-3 ">

                        <div class="basis-0 md:basis-3/5">
                            <div class="rounded  p-4 px-4 ">


                                <div id='general' class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">
                                    <div class="md:col-span-5 mt-2">
                                        <label for="producto">Producto<span class="text-red-500"> (Obligatorio)
                                            </span></label>
                                        <div class="relative mb-2  mt-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </div>
                                            <input type="text" id="producto" name="producto" value=""
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('producto') is-invalid @enderror"
                                                placeholder="Producto">
                                            @error('producto')
                                                <div style="color: red;">{{ $message }}</div>
                                            @enderror


                                        </div>
                                    </div>



                                    <div class="md:col-span-5 mt-2">

                                        <label for="extract">Descripción Breve</label>

                                        <div class="relative mb-2  mt-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </div>
                                            <textarea type="text" id="extract" name="extract" value=""
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('extract') is-invalid @enderror"
                                                placeholder="Extracto"></textarea>
                                            @error('extract')
                                                <div style="color: red;">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description">Descripción Extensa</label>
                                        <div class="relative mb-2 mt-2">

                                            <textarea type="text" id="description" name="description" value=""
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese texto"></textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="especificaciones">Especificaciones (Usa la lista integrada)</label>
                                        <div class="relative mb-2 mt-2">

                                            <textarea type="text" id="especificaciones" name="especificaciones" value=""
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('extract') is-invalid @enderror"
                                                placeholder="especificaciones"></textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="imagen">Imagen Principal (1000x1000px)</label>
                                        <div class="relative mb-2  mt-2">
                                            <input id="imagen" name="imagen"
                                                class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basis-0 md:basis-2/5">
                            <div class=" grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 rounded  p-4 px-4 ">
                                <div class="md:col-span-5">
                                    <label for="categoria_id">Categoria <span class="text-red-500"> (Obligatorio)
                                        </span></label>
                                    <div class="relative mb-2  mt-2">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <i class="fa-solid fa-list"></i>
                                        </div>
                                        <select name="categoria_id"
                                            class=" mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('categoria_id') is-invalid @enderror">
                                            <option value="">Seleccionar Categoria </option>
                                            @foreach ($categorias as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('categoria_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="md:col-span-5">
                                    <label for="brand_id">Marca <span class="text-red-500"> (Obligatorio)
                                        </span></label>
                                    <div class="relative mb-2  mt-2">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <i class="fa-solid fa-list"></i>
                                        </div>
                                        <select name="brand_id"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('categoria_id') is-invalid @enderror">
                                            <option value="">Seleccionar Marca </option>
                                            @foreach ($marcas as $item)
                                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                            @endforeach

                                        </select>
                                        @error('brand_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>




                                <div class="md:col-span-5">
                                    <label for="manuales">Ficha Técnica</label>
                                    <div class="relative mb-2  mt-2">
                                        <input name="manuales" accept="application/pdf"
                                            class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            id="manuales" type="file">
                                    </div>
                                </div>

                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox" id="hs-basic-usage"
                                            class="  relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                            id='destacado' data-field='destacado'>
                                        <label for="destacado" class="ml-4">Producto Destacado</label>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>

                    <div class="md:col-span-5 text-right mt-6 flex justify-between px-4 pb-4">
                        <div class="inline-flex items-end">
                            <a href="{{ route('products.index') }}"
                                class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                        </div>
                        <div class="inline-flex items-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                                Guardar
                            </button>
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


    @include('_layout.scripts')


</x-app-layout>
