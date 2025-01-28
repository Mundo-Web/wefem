 @extends('components.public.matrix', ['pagina' => 'blog'])
 @section('titulo', 'Post')
 @section('meta_title', $meta_title)
 @section('meta_description', $meta_description)
 @section('meta_keywords', $meta_keywords)
 @section('css_importados')

 @stop


 @section('content')

     <main class="bg-white">

         <section class="pt-32 max-w-7xl mx-auto">
             <div class="flex flex-col text-center items-center max-w-6xl mx-auto">
                 <div class="flex gap-4">
                     <h3 class="font-bold text-colorRojo text-text16"> Categoria </h3>
                     <span class="font-bold text-colorRojo text-text16">|</span>
                     <h3 class="font-bold text-colorRojo text-text16 ">Publicado
                         {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F, Y') }}</h3>
                 </div>
                 <h2 class=" text-colorAzulOscuro text-text48 font-bold">{{ $post->title }}
                 </h2>
             </div>
         </section>


         <section class=" max-w-7xl mx-auto pb-12">

             @if ($post->url_image)
                 <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                     <img src="{{ asset($post->url_image . $post->name_image) }}" alt="catedral"
                         class="w-full h-[500px] object-cover hidden md:block rounded-xl" />
                     <img src="{{ asset($post->url_image . $post->name_image) }}" alt="catedral"
                         class="w-full h-[250px] object-cover block md:hidden rounded-xl" />
                 </div>
             @endif

             <div class="flex flex-col gap-2 text-colorParrafo  text-text16 py-4">
                 {!! $post->description !!}
             </div>
             <div class="flex text-colorRojo flex-col gap-2">
                 <p class="font-bold text-text16"> compartir</p>
                 <div class="flex gap-4">
                     <i class="fa-solid fa-link"></i>
                     <i class="fa-brands fa-linkedin"></i>
                     <i class="fa-brands fa-x-twitter"></i>
                     <i class="fa-brands fa-facebook"></i>
                 </div>
             </div>

         </section>

         @if (count($postsrelacionados) > 0)
             <section class="max-w-7xl mx-auto">
                 <div class="flex flex-col gap-5">
                     <div class="flex  gap-3 flex-col w-full justify-start mb-4">
                         <h2 class="font-gotham_bold text-colorAzulOscuro text-4xl lg:text-5xl">Otras publicaciones</span>
                         </h2>
                         <p class="text-colorParrafo text-text18">Nam tempor diam quis urna maximus, ac laoreet arcu
                             convallis. Aenean
                             dignissim nec sem quis
                             consequat.</p>
                     </div>

                     <div class="w-full mb-16">
                         <div class="swiper slider_blog h-max">
                             <div class="swiper-wrapper">

                                 @foreach ($postsrelacionados as $post)
                                     <div class="swiper-slide">
                                         <a href="{{ route('detalleBlog', $post->id) }}">
                                             <div data-aos="fade-down" class="flex flex-col w-full">
                                                 <a href="{{ route('detalleBlog', $post->id) }}">
                                                     <div class="flex flex-row justify-center">
                                                         <img class="w-full h-[300px] object-cover rounded-xl"
                                                             src="{{ asset($post->url_image . $post->name_image) }}"
                                                             onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                                     </div>
                                                     <div class=" flex flex-col gap-3 mt-4">

                                                         <div class="flex flex-col justify-center items-start">
                                                             <p class="text-text16 font-bold text-colorRojo">Categoria</p>
                                                             <h2
                                                                 class=" text-colorAzulOscuro text-text24 line-clamp-3 font-bold">
                                                                 {{ $post->title }}
                                                             </h2>
                                                         </div>
                                                         <div class=" text-colorParrafo text-18 text-justify line-clamp-3">
                                                             {!! $post->extract ?? $post->description !!}</div>
                                                         <p
                                                             class="flexjustify-start gap-4 text-colorRojo text-text14 font-medium">
                                                             <span>29 de julio de 2023</span>
                                                             .
                                                             <span>Leido hace 5 min</span>
                                                         </p>
                                                     </div>
                                                 </a>
                                             </div>
                                         </a>
                                     </div>
                                 @endforeach

                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         @endif
     </main>


 @section('scripts_importados')

     <script>
         var swiper = new Swiper(".slider_blog", {
             slidesPerView: 3,
             spaceBetween: 30,
             centeredSlides: false,
             initialSlide: 0,
             grabCursor: true,
             loop: true,
             autoplay: {
                 delay: 2000,
                 disableOnInteraction: true,
             },
             breakpoints: {
                 0: {
                     slidesPerView: 1,

                 },
                 750: {
                     slidesPerView: 2,

                 },
                 1250: {
                     slidesPerView: 3,

                 },
             },
             pagination: {
                 el: ".swiper-pagination_productos",
                 clickable: true,
             },
         });
     </script>

 @stop

@stop
