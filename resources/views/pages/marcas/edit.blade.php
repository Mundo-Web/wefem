<x-app-layout title="Editar Categoria">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('marcas.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Editar Marca
                        {{ $brand->nombre }}</h2>
                </header>

                <div class="p-3">
                    <div class="rounded  p-4 px-4 ">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="nombre">Nombre</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="nombre" name="nombre" value="{{ $brand->nombre }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nombre">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label>Logo de la Marca</label>
                                <div class="relative mb-2 mt-2">
                                    <img src="{{ asset($brand->logo) }}" class="w-48 h-auto object-contain" />
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="logo">Actualizar Logo</label>
                                <div class="relative mb-2  mt-2">

                                    <input name="logo"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="logo" type="file" accept="image/png">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="descripcion">Descripción</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="descripcion" name="descripcion"
                                        value="{{ $brand->descripcion }}"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Descripción">
                                </div>
                            </div>

                            {{-- <div class="md:col-span-5">
                                                <label for="categoria">Imagen de categoría</label>
                                                <div class="relative mb-2 mt-2">
                                                  <img src="{{ asset($category->url_image . $category->name_image) }}"
                                                    class="max-w-xs max-h-48 object-cover  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                </div>
                                              </div> --}}



                            {{-- <div class="md:col-span-5">
                                                <label for="imagen">Subir una foto</label>
                                                <div class="relative mb-2  mt-2">
                                                  <input name="imagen"
                                                    class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                                </div>
                                              </div> --}}

                            <div class="md:col-span-5 text-right mt-6 flex justify-between">
                                <div class="inline-flex items-end">
                                    <a href="{{ route('marcas.index') }}"
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


</x-app-layout>
