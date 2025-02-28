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
        <div class="mx-w-6xl mx-auto px-4 py-8">
            <h2 class="text-center text-[36px] font-bold">🔥 Más productos 🔥</h2>
            <div class="flex  gap-6 max-w-5xl mx-auto mt-8">
                <!-- Grid de productos -->
                <div class=" grid grid-cols-3 gap-4 gap-y-8">
                    <!-- Producto 1 (Con fondo destacado) -->
                    @foreach ($catalogo as $product)
                        <div class=" rounded-lg">
                            <img src="{{ $product['image'] }}" alt="wePack" class="w-full h-auto object-cover mb-4">

                            <div class="p-6">

                                <div class="flex justify-between">
                                    <h3 class=" text-3xl font-semibold mb-2 line-clamp-2">
                                        {{ $product['name'] }}
                                    </h3>
                                    <span class=" text-[32px] font-bold text-[#FC58BE]">
                                        S/ {{ number_format($product['price'], 2) }}
                                    </span>

                                </div>

                                <!-- Precio -->
                                <div class="flex justify-between items-baseline gap-2  ">
                                    <h4 class=" text-base font-semibold mb-2 line-clamp-2">
                                        {{ $product['description'] }}
                                    </h4>

                                    <span class="text-base text-[#9F9F9F] font-semibold1 line-through">
                                        S/{{ number_format($product['oferta'], 2) }}
                                    </span>


                                </div>
                            </div>

                            <button
                                class="w-full border-2 border-[#FF9900]  text-[#FF9900] font-medium py-4 px-4 rounded-xl transition-colors">
                                ¡Lo quiero!
                            </button>
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
