<x-app-layout title="Categorias Post">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <section class="py-4 border-b border-slate-100 dark:border-slate-700">
            <a href="{{ route('categoriasPost.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-sm">Crear
                categoría</a>
        </section>


        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">


            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Categorías</h2>
            </header>
            <div class="p-3">

                <!-- Table -->
                <div class="overflow-x-auto">

                    <table id="tabladatos" class="display text-lg" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th class="line-clamp-2">Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>

                                    <td>{{ $item->slug }}</td>

                                    <td class="flex flex-row justify-end items-center gap-5">

                                        <a href="{{ route('categoriasPost.edit', $item->id) }}"
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
                                <th>Nombre</th>
                                <th>Slug</th>
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


            $('#tabladatos').on('click', '.btn_delete', function(e) {

                var id = $(this).attr('data-idService');

                Swal.fire({
                    title: "Seguro que deseas eliminar?",
                    text: "Vas a eliminar una categoria",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, borrar!",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({

                            url: '{{ route('categoriasPost.deleteCategory') }}',
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

        });
    </script>



</x-app-layout>
