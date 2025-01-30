<x-app-layout title="Crear Categoria">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Creación de
                        nueva categoría</h2>
                </header>

                <div class="p-3">
                    <div class="rounded  p-4 px-4 ">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="name">Nombre</label>
                                <div class="relative mb-2  mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="name" name="name" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nombre">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="imagen">Subir un Icono</label>
                                <div class="relative mb-2  mt-2">

                                    <input name="imagen"
                                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="imagen" type="file" accept="image/png">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="description">Descripción</label>
                                <div class="relative mb-2 mt-2">
                                    <div
                                        class="absolute inset-y-0 left-0 flex items-start pl-3 pointer-events-none top-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <textarea type="text" rows="2" id="description" name="description" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Descripción"></textarea>
                                </div>
                            </div>



                            <div class="md:col-span-5 text-right mt-6 flex justify-between">
                                <div class="inline-flex items-end">
                                    <a href="{{ route('categorias.index') }}"
                                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                                </div>
                                <div class="inline-flex items-end">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar
                                        categoría</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script>
        /*VALIDAR QUE EL ICONO SEA SVG*/
        document.getElementById("fileInput").addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                // Verificar tipo MIME
                if (file.type !== "image/png") {
                    Swal.fire({

                        icon: "error",
                        title: 'Solo se admiten archivos PNG', // Mostrar el mensaje dinámico
                        showConfirmButton: true,
                        timer: 1500
                    });
                    this.value = ""; // Resetea el input
                } else {
                    Swal.fire({

                        icon: "error",
                        title: 'Archivo válido' + file.name, // Mostrar el mensaje dinámico
                        showConfirmButton: true,
                        timer: 1500
                    });

                }
            }
        });
    </script>
</x-app-layout>
