@extends('components.public.matrix', ['pagina' => 'nosotros'])
@section('titulo', 'Nosotros')
@section('css_importados')
    <style>
        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_43.svg') }})
        }

        .swiper-button-next:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .swiper-button-prev {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_44.svg') }})
        }

        .swiper-button-prev:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        #breve_historia>p {
            margin-top: 1rem;
        }
    </style>
@stop


@section('content')
    <main class="pt-40">
        <!--Seccion breve historia -->
        <section class="max-w-7xl mx-auto bg-white">
            <h2 class="text-text48 mb-4 font-bold text-colorAzulOscuro">{{ $nosotros->title }}</h2>
            <div id="breve_historia" class="text-text18 text-colorParrafo">
                {!! $nosotros->breve_historia !!}
            </div>


            <img class="w-full my-16 rounded-xl object-cover h-[629px]" src="{{ $nosotros->imagen }}"
                alt="{{ $nosotros->title }}" />
        </section>
        <!--Seccion Mision y vision-->
        <section class="bg-colorBackgroundAzulClaro">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-8 py-12 ">

                <div class="flex justify-center">
                    <div class="flex flex-col gap-12  justify-center w-9/12 items-center">
                        <div class="flex flex-col gap-2 items-center text-center">

                            <i
                                class="fa-regular fa-lightbulb fa-xl  bg-colorBackgroundRed  rounded-full px-5 py-7 text-white"></i>

                            <h2 class="text-text32 text-colorAzulOscuro font-bold">Nuestra Misión</h2>
                            <p class="text-text18 text-colorParrafo">{{ $nosotros->mision }}</p>

                        </div>
                        <div class="flex flex-col gap-2 items-center text-center">

                            <i
                                class="fa-regular fa-lightbulb fa-xl  bg-colorBackgroundRed  rounded-full px-5 py-7 text-white"></i>

                            <h2 class="text-text32 text-colorAzulOscuro font-bold">Nuestra Visión</h2>
                            <p class="text-text18 text-colorParrafo">{{ $nosotros->vision }}</p>

                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/029e/b037/1c906e89e13d5b1a7bfca24ef702a2bb?Expires=1738540800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=dxMEm1qsJYfvdNuKonlfNPify9OliWLXaoF3ZThZD61Yp9agIyMnQ9FOzSE1qugpSyEufOZP29JIiosukN5SkAJNsMxhA6tWZ2had1uFSskgBVOJB5f7Gcpjz4W4SAJUrAMYRfyct4dgSR6LACCc33y8Ckd0hAWVXPZHbv3L7Yk0NLXUqEai2BvLXdztpnV05egCSlBq2~vPkSJRfrpSuJzX2mD-wsOYqbApAXWweNRu1MiBBKtivjezfR8OhMCbn9UOMfN0c9Z-Ifmz7o4OaMzyLYPjqJgGz7f9gNq6Ger76f8yrfPVw0sQaKMF6aeclXSwWpRIY~TuSseCrKVFDw__"
                        alt="" class="w-full h-[770px] object-cover rounded-xl">
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-8 py-12">
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/02c8/58d1/b251ba546d039068a60f2feab56f0dcf?Expires=1738540800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=E-fkzgWsfzobAvFNjWoV3HZIWXz-VgcrMg0hr~VmOoYABWhKew8iIJl-g9Gd4L5O9By4OLYJxxS6cQOj9zfIxpzv2Sys6umtwO7fpLmV-DpeFntdFetO0sUYlTuhnbTk0tT4tBEGoUUOm-vbRFC0R76jnN18Lo1PykOVwuRwDdPWh5QJ-xdCEpK9xOTuBAYq60LcIc0BGO72ArfE3MGIvLfdDd0yIw3emjaL9rz9Cw83ZeLrn-yHqEyIq6JTF2CIqxe6MuGnn~A9mwskY4fngVhx9uqXh8J2h9a7mliTsMaW-09h-fn3lG0cp4N8eVclP3fdiKFPVt03~NoAGmk6Dw__"
                        alt="" class="w-full h-[518px] object-cover rounded-xl">
                </div>

                <div class="flex flex-col gap-12">

                    <div class="flex flex-col gap-2 items-start">

                        <span class="text-text18 text-colorRojo">Nuestro Sello de Garantía</span>

                        <h2 class="text-text32 text-colorAzulOscuro font-bold">Maecenas fringilla magna vitae elit fringilla
                        </h2>
                        <p class="text-text18 text-colorParrafo">Donec id facilisis turpis. Etiam euismod, enim nec blandit
                            accumsan, justo ante molestie nisi, quis mattis lectus tellus non risus. In quis est sit amet
                            felis vestibulum fringilla eu sed leo. In ut rutrum lorem. Aenean fringilla felis neque, vel
                            sodales lorem commodo nec. Maecenas nec odio placerat, condimentum orci ac, convallis nunc.
                            Fusce vitae bibendum erat. In suscipit sapien ut arcu dignissim mattis.</p>

                        <p class="text-text18 text-colorParrafo">Aenean fringilla felis neque, vel sodales lorem commodo
                            nec. Maecenas nec odio placerat,
                            condimentum orci ac, convallis nunc. In quis est sit amet felis vestibulum fringilla eu sed leo.
                            Tellus non risus. In quis est sit amet felis vestibulum fringilla eu sed leo. In ut rutrum
                            lorem. Aenean fringilla felis neque.</p>

                    </div>

                </div>

            </div>
        </section>
        <!-- Newsletter Section -->
        <section class="bg-colorBackgroundRed">
            <div class="max-w-7xl mx-auto flex justify-between items-end py-16">
                <p class="w-1/3 text-text32 text-white"><x-custom.texto-titulo :text="$home->titleNewsletter" style="font-bold" />
                </p>
                <form class="w-1/3 flex items-center justify-center relative border-b-2 border-white py-2">
                    <input type="text"
                        class="placeholder:text-white w-full pr-12 pl-3 py-2 text-white bg-transparent outline-none border-none focus:border-none shadow-none text-text14 focus:outline-none focus:ring-0 ring-transparent"
                        placeholder="Correo Electrónico" />


                    <button
                        class="absolute right-0 py-2 px-4 rounded-full text-text14 text-white bg-colorBackgroundAzul hover:bg-colorBackgroundAzul active:bg-colorBackgroundAzul duration-150 outline-none shadow-none ">
                        Enviar
                        <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                    </button>
                </form>
            </div>

        </section>










    </main>

@section('scripts_importados')

    <script>
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                }
            },

        });

        var swiper = new Swiper(".clientes", {
            slidesPerView: 6,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 6,
                    centeredSlides: false,
                },
            },
        });
    </script>
@stop

@stop
