<x-app-layout title="Crear Producto">

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <form id="product-form" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <div id="description-editor" class="w-full min-h-[200px]"></div>
                                            <input type="hidden" name="description" id="description">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="especificaciones">Especificaciones</label>
                                        <div class="relative mb-2 mt-2">
                                            <div id="especificaciones-editor" class="w-full min-h-[200px]"></div>
                                            <input type="hidden" name="especificaciones" id="especificaciones">
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
                                <div class="md:col-span-5 mt-2">
                                    <label for="stock">Stock<span class="text-red-500">(Obligatorio)</span></label>
                                    <input type="number" id="stock" name="stock" placeholder="Ingrese Stock"
                                        pattern="[0-9]+" title="Solo números"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                   focus:border-blue-500 w-full p-2.5">
                                </div>
                                <div class="md:col-span-5 mt-2">
                                    <label for="precio">Precio<span class="text-red-500">(Obligatorio)</span></label>
                                    <input type="number" id="precio" name="precio" placeholder="Ingrese Precio"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                   focus:border-blue-500 w-full p-2.5">
                                </div>
                                <div class="md:col-span-5 mt-2">
                                    <label for="peso_empaque">Peso del Empaque<span
                                            class="text-red-500">(Obligatorio)</span></label>
                                    <input type="number" id="peso_empaque" name="peso_empaque"
                                        placeholder="Ingrese Peso Empaque"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                   focus:border-blue-500 w-full p-2.5">
                                </div>
                                <div class="md:col-span-5 mt-2">
                                    <label for="tipo_vendedor">Tipo de Vendedor<span
                                            class="text-red-500">(Obligatorio)</span></label>
                                    <input type="text" id="tipo_vendedor" name="v"
                                        value="Vendedor verificado" placeholder="Ingrese Tipo de Vendedor"
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                   focus:border-blue-500 w-full p-2.5">
                                </div>
                                <div x-data="{ enOferta: false }" class="md:col-span-5 mt-2">
                                    <div class="relative flex mb-2 mt-2">
                                        <input type="checkbox" id="en_oferta" name="en_oferta" x-model="enOferta"
                                            class="flex relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200" />
                                        <label for="en_oferta" class="ml-4">Producto en Oferta</label>
                                    </div>

                                    <div class="md:col-span-5 mt-2" x-show="enOferta">
                                        <label for="precio_oferta">Precio en Oferta <span
                                                class="text-red-500">(Obligatorio)</span></label>
                                        <input type="number" id="precio_oferta" name="precio_oferta"
                                            placeholder="Ingrese Precio Oferta"
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                   focus:border-blue-500 w-full p-2.5">
                                    </div>
                                </div>
                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox"
                                            class="mt-1 bg-gray-50 border border-gray-300
                                            text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500
                                             p-2.5"
                                            id='destacado' name='destacado' />
                                        <label for="destacado" class="ml-4">Producto Destacado</label>
                                    </div>
                                </div>
                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox"
                                            class=" mt-1 bg-gray-50 border border-gray-300
                                            text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500
                                             p-2.5"
                                            id='garantia_entrega' name='garantia_entrega' checked />
                                        <label for="garantia_entrega" class="ml-4">Garantia de Entrega</label>
                                    </div>
                                </div>
                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox"
                                            class="mt-1 bg-gray-50 border border-gray-300
                                            text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500
                                             p-2.5"
                                            id='envio_gratis' name='envio_gratis' checked />
                                        <label for="envio_gratis" class="ml-4">Envío Gratis</label>
                                    </div>
                                </div>
                                <div class="md:col-span-5">

                                    <div class="relative mb-2  mt-2">
                                        <input type="checkbox"
                                            class="mt-1 bg-gray-50 border border-gray-300
                                            text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500
                                             p-2.5"
                                            id='devolucion' name='devolucion' checked />
                                        <label for="devolucion" class="ml-4">Devolución</label>
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
                                <!-- Agregar el campo de la galería de imágenes -->
                                <div class="md:col-span-5">
                                    <div class="w-full">
                                        <label for="fileAlbum"
                                            class="cursor-pointer text-center p-4 md:p-8 block border-2 border-dashed rounded-lg">
                                            <i class="fa-solid fa-cloud-arrow-up fa-3x text-colorAzul"></i>
                                            <p class="mt-3 text-colorParrafo max-w-xs mx-auto">
                                                Haga clic para <span class="font-medium text-indigo-600">Cargar su
                                                    archivo</span> o arrastre y suelte su archivo aquí
                                            </p>
                                        </label>
                                        <input type="file" id="fileAlbum" name="images[]" multiple
                                            accept="image/*" class="hidden" onchange="handleImageUpload(event)">
                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="album">Galería de imágenes</label>
                                    <div class="border p-4 rounded shadow mt-1 grid grid-cols-3"
                                        id="gallery-container">
                                        <!-- Aquí se mostrarán las imágenes cargadas -->
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

            // Inicializar Quill para Especificaciones
            const quillEspecificaciones = new Quill('#especificaciones-editor', {
                modules: {
                    toolbar: [{
                        'list': 'bullet'
                    }],
                },
                placeholder: 'Escriba las especificaciones aquí...',
                theme: 'snow'
            });
            // Actualizar los campos ocultos antes de enviar el formulario
            const form = document.getElementById('product-form');
            form.addEventListener('submit', function(event) {
                // Actualizar el campo oculto "description" con el contenido de Quill
                document.getElementById('description').value = quillDescription.root.innerHTML;

                // Actualizar el campo oculto "especificaciones" con el contenido de Quill
                document.getElementById('especificaciones').value = quillEspecificaciones.root.innerHTML;

                // Continuar con el envío del formulario
                return true;
            });

        });
    </script>

    <script>
        let selectedFiles = []; // Array para almacenar los archivos seleccionados

        // Función para limpiar el input de tipo file
        function clearFileInput() {
            const fileInput = document.getElementById('fileAlbum');
            fileInput.value = ''; // Limpiar el input de tipo file
        }

        // Función para actualizar el input con los archivos restantes
        function updateFileInput() {
            const fileInput = document.getElementById('fileAlbum');
            clearFileInput(); // Limpiar el input antes de agregar nuevos archivos

            // Crear un nuevo DataTransfer para agregar los archivos restantes
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => {
                dataTransfer.items.add(file);
            });

            // Asignar los archivos al input de tipo file
            fileInput.files = dataTransfer.files;
        }

        // Función para manejar la carga de imágenes
        function handleImageUpload(event) {
            const files = event.target.files;
            const galleryContainer = document.getElementById("gallery-container");

            // Limpiar la galería antes de agregar nuevas imágenes
            galleryContainer.innerHTML = "";

            // Vaciar el array de archivos seleccionados
            selectedFiles = [];

            // Mostrar las imágenes seleccionadas
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement("img");
                    imgElement.src = e.target.result;
                    imgElement.alt = file.name;
                    imgElement.classList.add("w-auto", "h-32", "object-cover", "rounded-xl", "mb-4");

                    // Crear un botón para eliminar la imagen de la vista previa
                    const deleteButton = document.createElement("button");
                    deleteButton.classList.add("absolute", "top-2", "right-2", "bg-red-600", "text-white",
                        "px-2", "py-1", "rounded-full");
                    deleteButton.innerHTML = '<i class="fa-solid fa-trash"></i>';
                    deleteButton.onclick = () => removeImageFromPreview(file.name);

                    const imageWrapper = document.createElement("div");
                    imageWrapper.classList.add("relative", "group", "images");
                    imageWrapper.appendChild(imgElement);
                    imageWrapper.appendChild(deleteButton);

                    galleryContainer.appendChild(imageWrapper);
                }
                reader.readAsDataURL(file);

                // Agregar el archivo al array de archivos seleccionados
                selectedFiles.push(file);
            });

            // Actualizar el input de tipo file
            updateFileInput();
        }

        // Función para eliminar imágenes de la vista previa
        function removeImageFromPreview(fileName) {
            const galleryContainer = document.getElementById("gallery-container");
            const images = galleryContainer.querySelectorAll("div.images");

            // Eliminar la imagen de la vista previa
            images.forEach(imageWrapper => {
                if (imageWrapper.querySelector("img").alt === fileName) {
                    galleryContainer.removeChild(imageWrapper);
                }
            });

            // Eliminar el archivo del array de archivos seleccionados
            selectedFiles = selectedFiles.filter(file => file.name !== fileName);

            // Actualizar el input de tipo file
            updateFileInput();
        }
    </script>


    @include('_layout.scripts')


</x-app-layout>
