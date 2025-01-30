<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 w-full max-w-9xl mx-auto border-b border-gray-200 dark:border-gray-700">
        <!-- Navegación de Tabs -->
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <!-- Tab Contenido Pagina -->
            <li class="me-2">
                <a href="#"
                    class="tab-link text-colorAzulOscuro font-semibold border-b-2 border-[#000f25] inline-flex items-center justify-center p-4 rounded-t-lg group"
                    data-target="tab-pagina-contacto">
                    <i class="fa-solid fa-pager fa-lg mr-4"></i>
                    Contenido de Página
                </a>

            </li>
            <!-- Tab CRUD FAQs -->
            <li class="me-2">
                <a href="#"
                    class="tab-link inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg font-semibold hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    data-target="tab-crud-faqs">
                    <i class="fa-solid fa-database fa-lg mr-4"></i>
                    Gestión de Preguntas Frecuentes
                </a>
            </li>
        </ul>
    </div>


    <div class="tab-content" id="tab-pagina-contacto">
        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
            <form id="update-contacto-page-form" action="{{ route('contactoview.update', $contactoview->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div
                    class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Actualizar
                            contenido de la Web</h2>
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

                                <div class="rounded p-4 px-4 w-full">

                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">

                                        <h2
                                            class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                            Portada</h2>

                                        <div class="md:col-span-5">
                                            <label for="titleSection">Titulo</label>
                                            <div class="relative mb-2 ">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="titleSection" name="titleSection"
                                                    value="{{ $contactoview->titleSection }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese el titulo">
                                            </div>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="subtitleSection">Subtitulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="subtitleSection" name="subtitleSection"
                                                    value="{{ $contactoview->subtitleSection }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>

                                        <h2
                                            class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                            Sección - Formulario de Contacto</h2>
                                        <div class="md:col-span-5">
                                            <label for="titleForm">Titulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="titleForm" name="titleForm"
                                                    value="{{ $contactoview->titleForm }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>



                                        <div class="md:col-span-5">
                                            <label for="subtitleForm">Subtitulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="subtitleForm" name="subtitleForm"
                                                    value="{{ $contactoview->subtitleForm }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>




                                        <h2
                                            class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                            Seccion - Preguntas Frecuentes</h2>

                                        <div class="md:col-span-5">
                                            <label for="titleFaqs">Titulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="titleFaqs" name="titleFaqs"
                                                    value="{{ $contactoview->titleFaqs }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="subtitleFaqs">Subtitulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="subtitleFaqs" name="subtitleFaqs"
                                                    value="{{ $contactoview->subtitleFaqs }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>
                                        <h2
                                            class="md:col-span-5 font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                                            Seccion - Slider</h2>

                                        <div class="md:col-span-5">
                                            <label for="titleSlider">Titulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="titleSlider" name="titleSlider"
                                                    value="{{ $contactoview->titleSlider }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="subtitleSlider">Subtitulo</label>
                                            <div class="relative mb-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <i class="w-6 text-gray-500 fas fa-edit"></i>
                                                </div>
                                                <input type="text" id="subtitleSlider" name="subtitleSlider"
                                                    value="{{ $contactoview->subtitleSlider }}"
                                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Ingrese texto">
                                            </div>
                                        </div>

                                        <div class="md:col-span-5 text-right mt-6">
                                            <div class="inline-flex items-end">
                                                <button type="submit" id="form_general"
                                                    onclick="confirmarActualizacion()"
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



    </div>
    <div class="tab-content px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto hidden" id="tab-crud-faqs">


        <section class="py-4 border-b border-slate-100 dark:border-slate-700">
            <a href="{{ route('faqs.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-sm">Agregar
                Faqs</a>
        </section>


        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">


            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Faqs </h2>
            </header>
            <div class="p-3">

                <!-- Table -->
                <div class="overflow-x-auto">

                    <table id="tabladatos" class="display text-lg" style="width:100%">
                        <thead>
                            <tr>

                                <th>Pregunta</th>
                                <th class="w-72">Respuesta</th>
                                <th class="w-32">Visible</th>
                                <th class="w-32">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($faqs as $item)
                                <tr>

                                    <td>{{ $item->pregunta }}</td>
                                    <td class="w-72 line-clamp-2">{{ $item->respuesta }}</td>

                                    <td>
                                        <form method="POST" action="">
                                            @csrf
                                            <input type="checkbox" id="hs-basic-usage"
                                                class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                                          rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                                          checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                                          dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                                          before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                                          before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                                id='{{ 'v_' . $item->id }}' data-field='visible'
                                                data-idService='{{ $item->id }}'
                                                data-titleService='{{ $item->titulo }}'
                                                {{ $item->visible == 1 ? 'checked' : '' }}>
                                            <label for="{{ 'v_' . $item->id }}"></label>
                                        </form>



                                    </td>
                                    <td class="flex flex-row justify-end items-center gap-5">

                                        <a href="{{ route('faqs.edit', $item->id) }}"
                                            class="bg-yellow-400 px-3 py-2 rounded text-white  "><i
                                                class="fa-regular fa-pen-to-square"></i></a>

                                        <form action=" " method="POST">
                                            @csrf
                                            <a data-idService='{{ $item->id }}'
                                                class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                                                    class="fa-regular fa-trash-can"></i></a>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>

                                <th>Pregunta</th>
                                <th class="w-72">Respuesta</th>
                                <th>Visible</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <script>
        $('document').ready(function() {

            new DataTable('#tabladatos', {
                responsive: true
            });

            $(document).on("click", ".btn_delete", function(e) {

                var id = $(this).attr('data-idService');

                Swal.fire({
                    title: "Seguro que deseas eliminar?",
                    text: "Vas a eliminar un FAQ",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, borrar!",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({

                            url: '{{ route('faqs.borrar') }}',
                            method: 'POST',
                            data: {
                                _token: $('input[name="_token"]').val(),
                                id: id,

                            }

                        }).done(function(res) {

                            Swal.fire({
                                title: res.message,
                                icon: "success"
                            });

                            location.reload();

                        })


                    }
                });

            });


            $(document).on("change", ".btn_swithc", function() {
                var visible = 0;
                var id = $(this).attr('data-idService');
                var titleService = $(this).attr('data-titleService'); // Agregar titleService aquí

                // Verifica si está marcado o no
                if ($(this).is(':checked')) {
                    visible = 1; // Establecer status como 1 si está marcado
                } else {
                    visible = 0; // Establecer status como 0 si no está marcado
                }

                $.ajax({
                    url: "{{ route('faqs.updateVisible') }}",
                    method: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        visible: visible,
                        id: id
                    },
                    success: function(res) {
                        // Mostrar el mensaje usando el título del servicio que regresamos desde el backend
                        Swal.fire({

                            icon: "success",
                            title: titleService + " ahora es " + (visible == 1 ?
                                "Visible" : "No Visible"
                            ), // Mostrar el mensaje dinámico
                            showConfirmButton: true,
                            timer: 1500
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Algo salió mal, por favor intente de nuevo.'
                        });
                    }
                });
            });

            // Enviar formulario con AJAX
            $('#update-contacto-page-form').on('submit', function(e) {
                e.preventDefault(); // Evitar que se envíe el formulario normalmente

                var formData = new FormData(this); // Recoger todos los datos del formulario

                $.ajax({
                    url: "{{ route('contactoview.update', $contactoview->id) }}", // URL de la ruta
                    type: 'POST', // Usamos POST
                    data: formData, // Los datos a enviar
                    processData: false, // No procesar los datos
                    contentType: false, // No definir el tipo de contenido (para que FormData maneje los archivos correctamente)
                    success: function(response) {
                        // Si la actualización es exitosa
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: 'Página actualizada correctamente.',
                            showConfirmButton: true
                        }).then(() => {
                            // Redirigir o realizar alguna otra acción después de la confirmación
                            window.location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        // Si ocurre un error
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error!',
                            text: 'Ocurrió un error al actualizar los datos.',
                            showConfirmButton: true
                        });
                    }
                });
            });


        })
    </script>
    <script>
        const tabs = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();

                // Remover clases activas de todos los tabs y ocultar contenidos
                tabs.forEach(t => t.classList.remove('text-colorAzulOscuro', 'border-[#000f25]'));
                tabContents.forEach(content => content.classList.add('hidden'));

                // Agregar clase activa al tab seleccionado
                tab.classList.add('text-colorAzulOscuro', 'border-[#000f25]');

                // Mostrar el contenido relacionado con el tab seleccionado
                const target = tab.getAttribute('data-target');
                document.getElementById(target).classList.remove('hidden');
            });
        });
    </script>
</x-app-layout>
