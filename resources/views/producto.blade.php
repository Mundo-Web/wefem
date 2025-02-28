@php
    $catalogo = [
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/fV6JQ7Bf/e668d950658ae3c60479b23cdc546252.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/zyjGBDv/dd77e7ec81f52f1e46c68e0cb7e3db80.png',
        ],
        [
            'name' => 'wePack',
            'price' => 255.0,
            'oferta' => 179.9,
            'description' => '(Disco + Esterilizador)',
            'image' => 'https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png',
        ],
    ];
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-bebas {
            font-family: "Bebas Neue", serif;
        }

        .font-poppins {
            font-family: "Poppins", serif;
        }

        .icon-circle {
            width: 250px;
            height: 250px;
            border: 1px solid white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .icon-circle:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-white relative">



    <!--Header We Fem-->

    @include('components.Sections.Producto.Header')


    <main class="">
        @include('components.Sections.Producto.Detalle')
        @include('components.Sections.ComoUsar.WeDisk')
        <div class="mx-w-7xl mx-auto px-4 py-8">
            <h2
                class="text-[36.25px] leading-[29.36px] font-bold text-[#212529] my-6 text-center flex gap-2 items-center justify-center">
                @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])
                Más productos
                @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])</h2>
            <div class="flex  gap-6 max-w-7xl mx-auto mt-8 mb-8">
                <!-- Grid de productos -->
                <div class=" grid grid-cols-3 gap-8 gap-y-8">
                    <!-- Producto 1 (Con fondo destacado) -->
                    @foreach ($catalogo as $product)
                        <div class=" rounded-xl w-full group cursor-pointer overflow-hidden ">
                            <img src="{{ $product['image'] }}" alt="wePack"
                                class="bg-[#FAFAFA] w-full h-auto object-cover rounded-xl mb-4 group-hover:bg-[#FF9900] transition-colors duration-300">

                            <div class="px-6 text-[#212529]">

                                <div class="flex justify-between">
                                    <h3 class=" text-[29.44px] leading-[41.64px] font-semibold  line-clamp-2">
                                        {{ $product['name'] }}
                                    </h3>
                                    <span
                                        class=" md:text-[25.56px] xl:leading-[39.79px] 2xl:text-[32.56px] tracking-[-0.01em] font-bold text-[#FC58BE]">
                                        S/ {{ number_format($product['price'], 2) }}
                                    </span>

                                </div>

                                <!-- Precio -->
                                <div class="flex justify-between items-baseline gap-2  ">
                                    <h4 class=" text-[16.28px] leading-[29.18px] font-normal mb-2 line-clamp-2">
                                        {{ $product['description'] }}
                                    </h4>

                                    <span
                                        class="text-[16.8px] text-[#9F9F9F] font-semibold1 line-through leading-[21.84px]">
                                        S/{{ number_format($product['oferta'], 2) }}
                                    </span>


                                </div>
                                <a href="/producto"
                                    class="bolck w-full flex gap-2 items-center justify-center fill-[#FF9900]  border-2 border-[#FF9900]  text-[#FF9900] font-medium py-4 px-4 rounded-xl group-hover:bg-[#FF9900] group-hover:fill-[#FFFFFF] group-hover:text-white transition-colors duration-300">
                                    ¡Lo quiero!
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14"
                                        viewBox="0 0 17 14" fill="currrent">
                                        <path
                                            d="M16.4986 7.82554C16.8518 7.47235 16.8518 6.89972 16.4986 6.54653L10.743 0.791003C10.3899 0.437815 9.81723 0.437815 9.46404 0.791003C9.11086 1.14419 9.11086 1.71682 9.46404 2.07001L14.5801 7.18604L9.46404 12.3021C9.11086 12.6552 9.11086 13.2279 9.46404 13.5811C9.81723 13.9343 10.3899 13.9343 10.743 13.5811L16.4986 7.82554ZM0.484375 8.09043H15.8591V6.28164H0.484375V8.09043Z"
                                            fill="current" />
                                    </svg>
                                </a>
                            </div>


                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </main>





    @include('components.Sections.Home.Footer-home')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>


</html>
