 <div class="w-full">
     <label for="album">Agregar más imágenes</label>
     <form id="uploadImagesForm" action="{{ route('products.uploadImages', $album->id) }}" method="POST"
         enctype="multipart/form-data">
         @csrf
         <div class="flex gap-4">
             <div class="w-1/3 mt-1 h-40 rounded-lg border-2 shadow-lg flex items-center justify-center">
                 <label for="file" class="cursor-pointer text-center p-4 md:p-8">

                     <i class="fa-solid fa-cloud-arrow-up fa-3x text-colorAzul"></i>

                     <p class="mt-3 text-colorParrafo max-w-xs mx-auto">Haga clic para <span
                             class="font-medium text-indigo-600">Cargar su archivo</span> o arrastre y suelte su archivo
                         aquí</p>
                 </label>
                 <input type="file" id="file" name="images[]" multiple class="hidden" accept="image/*"
                     onchange="previewImages(event)" />
             </div>

             <!-- Contenedor para las previsualizaciones de las imágenes -->
             <div id="preview-container" class="w-2/3 grid grid-cols-4 gap-4"></div>

         </div>
         <div class="flex w-full justify-end">
             <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Agregar</button>
         </div>
     </form>

     <div class="mt-4">
         <label for="album">Galería de imágenes</label>
         <div class="border p-4 rounded shadow mt-1" id="gallery-container">
             <!-- Imágenes -->
             @if ($album->images->isNotEmpty())
                 <div class="grid grid-cols-5 gap-4">
                     @foreach ($album->images as $image)
                         <div class="relative group">
                             <img src="{{ asset($image->url_image) }}" alt="{{ $image->name_image }}"
                                 class="w-auto h-36 object-cover rounded-xl">
                             <button onclick="deleteImage('{{ route('products.images.destroy', $image) }}', this)"
                                 class="absolute top-2 right-2 bg-red-600 text-white px-2 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                 <i class="fa-solid fa-trash"></i>
                             </button>
                         </div>
                     @endforeach
                 </div>
             @else
                 <p class="text-gray-500">No hay imágenes en este álbum.</p>
             @endif
         </div>
     </div>
 </div>
 <script>
     document.getElementById('uploadImagesForm').addEventListener('submit', function(event) {
         event.preventDefault();
         uploadImages(event);
     });

     function uploadImages(event) {
         let formData = new FormData(document.getElementById('uploadImagesForm'));
         //pre filtro
         fetch('{{ route('products.uploadImages', $album->id) }}', {
                 method: 'POST',
                 headers: {
                     'X-CSRF-TOKEN': '{{ csrf_token() }}',
                 },
                 body: formData
             })
             .then(response => response.json())
             .then(data => {
                 if (data.success) {
                     Swal.fire('¡Imágenes agregadas!', data.message, 'success');
                     updateGallery(data.album);
                 } else {
                     Swal.fire('Error', 'Hubo un problema al agregar las imágenes', 'error');
                 }
             })
             .catch(error => {
                 Swal.fire('Error', 'Ocurrió un error al procesar la solicitud', 'error');
             });
     }
     // Función para simular asset() en el frontend
     function asset(path) {
         return `${window.location.origin}/${path}`;
     }

     function updateGallery(album) {
         const galleryContainer = document.getElementById('gallery-container');
         galleryContainer.innerHTML = '';

         if (album.images.length > 0) {
             const grid = document.createElement('div');
             grid.classList.add('grid', 'grid-cols-5', 'gap-4');

             album.images.forEach(image => {
                 const imageWrapper = document.createElement('div');
                 imageWrapper.classList.add('relative', 'group');

                 const img = document.createElement('img');
                 img.src = asset(image.url_image);
                 img.alt = image.name_image;
                 img.classList.add('w-auto', 'h-36', 'object-cover', 'rounded-xl');

                 const deleteButton = document.createElement('button');
                 deleteButton.classList.add('absolute', 'top-2', 'right-2', 'bg-red-600', 'text-white', 'px-2',
                     'py-1', 'rounded-full', 'opacity-0', 'group-hover:opacity-100', 'transition-opacity');
                 deleteButton.innerHTML = '<i class="fa-solid fa-trash"></i>';
                 deleteButton.onclick = function() {
                     deleteImage('{{ route('products.images.destroy', '') }}/' + image.id, imageWrapper);
                 };

                 imageWrapper.appendChild(img);
                 imageWrapper.appendChild(deleteButton);
                 grid.appendChild(imageWrapper);
             });

             galleryContainer.appendChild(grid);
         } else {
             galleryContainer.innerHTML = '<p class="text-gray-500">No hay imágenes en este álbum.</p>';
         }
     }

     function deleteImage(url, imageWrapper) {
         Swal.fire({
             title: '¿Estás seguro?',
             text: "¡Esta acción no se puede deshacer!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Sí, eliminar',
             cancelButtonText: 'Cancelar'
         }).then((result) => {
             if (result.isConfirmed) {
                 fetch(url, {
                         method: 'DELETE',
                         headers: {
                             'X-CSRF-TOKEN': '{{ csrf_token() }}',
                             'Accept': 'application/json',
                         },
                     })
                     .then(response => response.json())
                     .then(data => {
                         if (data.success) {
                             Swal.fire('¡Eliminado!', data.message, 'success');
                             imageWrapper.remove();
                         } else {
                             Swal.fire('Error', 'No se pudo eliminar la imagen', 'error');
                         }
                     })
                     .catch(error => {
                         Swal.fire('Error', 'Ocurrió un problema al eliminar la imagen', 'error');
                     });
             }
         });
     }

     function previewImages(event) {
         const previewContainer = document.getElementById('preview-container');
         previewContainer.innerHTML = ''; // Limpiar cualquier previsualización anterior

         const files = event.target.files;
         for (let i = 0; i < files.length; i++) {
             const file = files[i];

             // Crear un nuevo contenedor para la imagen y el botón de eliminar
             const imageWrapper = document.createElement('div');
             imageWrapper.classList.add('relative', 'w-24', 'h-24', 'rounded-lg');

             // Crear un nuevo elemento de imagen
             const img = document.createElement('img');
             img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-lg');
             img.file = file;

             // Crear un lector de archivos
             const reader = new FileReader();

             // Cuando el lector cargue el archivo, establecer la imagen
             reader.onload = function(e) {
                 img.src = e.target.result;
                 //agregar atributo name a la imagen/ CLASE DE LA IMAGEN
             };

             // Leer el archivo como una URL de datos
             reader.readAsDataURL(file);

             // Crear el botón de eliminar
             const deleteButton = document.createElement('button');
             deleteButton.type = 'button';
             deleteButton.classList.add('absolute', 'top-0', 'right-0', 'bg-red-500', 'text-white', 'p-1',
                 'rounded-full', 'px-2', 'py-1');
             deleteButton.innerHTML = '<i class="fa-solid fa-trash"></i>';
             deleteButton.onclick = function() {
                 imageWrapper.remove(); // Eliminar la imagen y el botón de la previsualización
                 //agregar referemcia a la previsualizacion
             };

             // Agregar la imagen y el botón al contenedor
             imageWrapper.appendChild(img);
             imageWrapper.appendChild(deleteButton);
             previewContainer.appendChild(imageWrapper);
         }
     }
 </script>
