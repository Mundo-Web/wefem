@php
    $posts = [
        ['image' => 'https://i.ibb.co/qYWkFHcr/image.png'],
        ['image' => 'https://i.ibb.co/SjDMLFx/image.png'],
        ['image' => 'https://i.ibb.co/d068vJ8C/image.png'],
        ['image' => 'https://i.ibb.co/Y45sRBx9/image.png'],
    ];
@endphp



<section class="bg-white text-[#212529] pt-16 " data-aos="fade-up" data-aos-duration="1000"
    data-aos-easing="ease-in-out-quart">
    <!-- Header -->
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-[32.94px] leading-[38.12px] font-bold mb-4">¡Juntxs, sin límites!</h2>
        <a href="https://instagram.com/wefem.pe"
            class="inline-flex items-center font-semibold text-[#EF62BA] hover:opacity-90 transition-opacity leading-[35.75px] text-[30.89px]">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
            @wefem.pe
        </a>
    </div>

    <!-- Instagram Grid -->
    <div class="">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">



            <!-- Post -->
            @foreach ($posts as $post)
                <div class="relative group overflow-hidden ">
                    <div class=" aspect-square  flex flex-col justify-center items-center ">
                        <img src="{{ $post['image'] }}" alt="" class="w-full h-full object-cover">
                    </div>

                </div>
            @endforeach




        </div>
    </div>
</section>
