<x-app-layout title="Mostrar mensajes">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Enviado el
                    {{ $message->created_at->format('d-m-Y') }} por {{ $message->full_name }}</h2>
            </header>
            <div class="p-3">

                <div class="p-6">

                    <p class="font-bold">Correo:</p>
                    <p> {{ $message->email }} </p>
                    <br>
                    <p class="font-bold">Teléfono:</p>
                    <p> {{ $message->phone }} </p>
                    <br>
                    <p class="font-bold">Mensaje:</p>
                    <p class="mb-5">
                        {{ $message->message }}
                    </p>
                    <!-- Formulario para responder -->
                    <form id="message-form" action="{{ route('mensajes.reply', $message->id) }}" method="POST">
                        @csrf
                        <div class="md:col-span-5">
                            <label for="response_message">Responder Mensaje</label>
                            <div class="relative mb-2 mt-2">
                                <div id="response_message-editor" class="w-full min-h-[200px]"></div>
                                <input type="hidden" name="response_message" id="response_message">
                            </div>
                        </div>


                        <div class="md:col-span-5 text-right mt-6 flex justify-between px-4 pb-4">
                            <div class="inline-flex items-end">
                                <a href="{{ route('mensajes.index') }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                            </div>
                            <div class="inline-flex items-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                                    Enviar Respuesta
                                </button>
                            </div>
                        </div>

                    </form>



                </div>
            </div>
        </div>



    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote'],
                ['link'],

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
            const quillDescription = new Quill('#response_message-editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Escriba la respuesta aquí...',
                theme: 'snow',
                height: 300
            });


            // Actualizar los campos ocultos antes de enviar el formulario
            const form = document.getElementById('message-form');
            form.addEventListener('submit', function(event) {
                // Actualizar el campo oculto "description" con el contenido de Quill
                document.getElementById('response_message').value = quillDescription.root.innerHTML;

                // Continuar con el envío del formulario
                return true;
            });

        });
    </script>


</x-app-layout>
