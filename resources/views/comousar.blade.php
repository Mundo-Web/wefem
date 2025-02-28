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

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-bebas {
            font-family: "Bebas Neue", serif;
        }

        .font-poppins {
            font-family: "Poppins", serif;
        }
    </style>
</head>

<body class="bg-white relative">



    <!--Header We Fem-->

    @include('components.Sections.ComoUsar.Header')


    <main class="">
        @include('components.Sections.ComoUsar.WeCup')
        <div class="mt-20">
            @include('components.Sections.ComoUsar.WeDisk')
        </div>
        @include('components.Sections.Home.CarruselProductos')
        <div class="py-12 text-white h-[349.68px] flex items-center justify-center font-poppins"
            style="background: rgb(128,113,182);
background: linear-gradient(90deg, rgba(128,113,182,1) 0%, rgba(192,175,225,1) 100%);">
            <p class="px-[5%] mx-auto text-[26.45px] leading-[39.67px]">
                weFem es una de las marcas más confiables en la categoría de cuidado menstrual reutilizable en el perú,
                innovamos con la misma integridad con la que comenzamos hace más de 4 años.
                <strong> ¿Listo para transformar tu período para siempre? Elevamos tu confianza con productos
                    creados conscientemente y hechos para tu cuerpo y nuestro planeta.</strong>
            </p>
        </div>
        @include('components.Sections.ComoUsar.Section-not-sure')
    </main>

    @include('components.Sections.Home.Footer-home')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>


</html>
