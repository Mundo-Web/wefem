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

    @include('components.Sections.Nosotros.Header')


    <main class="">
        @include('components.Sections.Home.Features')
        <div class="flex gap-6 max-w-6xl mx-auto py-12">
            <div class="w1/2">
                <p class="font-poppins text-[26px]">
                    weFem se enorgullece de contar con los más altos estándares de calidad y seguridad en la fabricación
                    de todos nuestros productos menstruales. Poseemos el prestigioso registro sanitario de la FDA,
                    asegurando que nuestros productos cumplen con las estrictas normas de salud y seguridad de los
                    Estados Unidos. Además, hemos obtenido la certificación ISO 9001, un reconocimiento internacional
                    que respalda nuestra dedicación a la excelencia en la gestión de calidad.
                    <br />
                    <br />
                    En el ámbito nacional,
                    contamos con el registro sanitario de DIGEMID en Perú, demostrando nuestro compromiso con la salud y
                    bienestar de nuestras usuarias peruanas. Estos logros reflejan nuestra constante búsqueda de la
                    excelencia, garantizando a nuestras clientas la confianza de que nuestros productos son seguros,
                    efectivos y fabricados con los más altos estándares de calidad a nivel mundial.
                </p>
            </div>
            <div class="w1/2">
                <img src="https://i.ibb.co/VWpc1dvr/image.png" class="w-full h-full object-cover" />
            </div>
        </div>

        <div class="py-12 text-white  "
            style="background: rgb(128,113,182);
background: linear-gradient(90deg, rgba(128,113,182,1) 0%, rgba(192,175,225,1) 100%);">
            <div class="max-w-5xl justify-between flex mx-auto gap-6">
                <img id="imagen1" class=" brightness-0 grayscale-0 invert"
                    src="https://i.ibb.co/931mypkH/image.png" />
                <img class=" brightness-0 grayscale-0 invert" src="https://i.ibb.co/NgMJf8d8/image.png" />
                <img id="imagen2" class=" brightness-0 grayscale-0 invert"
                    src="https://i.ibb.co/sdGcCP7B/image.png" />
            </div>
        </div>
        @include('components.Sections.Nosotros.Beneficios')
        <div class="bg-[#FC58BE]">
            <div class="bg-[#FC58BE] py-12 flex items-center justify-center p-4">
                <div class=" flex flex-wrap justify-center gap-8  mx-auto">
                    <!-- Icono 1 -->
                    <div class="icon-item flex flex-col items-center text-center">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-graduation-cap text-white text-[93px]"></i>
                            <p class="text-white text-[21.81px] leading-tight max-w-[150px]">
                                Accesabilidad<br>y educación
                            </p>
                        </div>

                    </div>

                    <!-- Icono 2 -->
                    <div class="icon-item flex flex-col items-center text-center">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-lightbulb  text-white text-[93px]"></i>
                            <p class="text-white text-[21.81px] leading-tight max-w-[150px]">
                                Innovación<br>continua
                            </p>
                        </div>

                    </div>

                    <!-- Icono 3 -->
                    <div class="icon-item flex flex-col items-center text-center">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-seedling  text-white text-[93px]"></i>
                            <p class="text-white text-[21.81px] leading-tight max-w-[150px]">
                                Accesabilidad<br>y educación
                            </p>
                        </div>

                    </div>

                    <!-- Icono 4 -->
                    <div class="icon-item flex flex-col items-center text-center">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-venus  text-white text-[93px]"></i>
                            <p class="text-white text-[21.81px] leading-tight max-w-[150px]">
                                Sostenibilidad<br>ambiental
                            </p>
                        </div>

                    </div>

                    <!-- Icono 5 -->
                    <div class="icon-item flex flex-col items-center text-center">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-shield-alt  text-white text-[93px]"></i>
                            <p class="text-white text-[21.81px] leading-tight max-w-[150px]">
                                Calidad y<br>seguridad
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('components.Sections.Home.Section-instagram')


    </main>

    <div id="modal1"
        class=" absolute bottom-0 inset-0 flex hidden items-center justify-center z-50 bg-[#00000080]  min-h-screen"
        style="backdrop-filter: blur(10px)">
        <div class="relative">
            <img src="https://i.ibb.co/XfWn6hNG/image.png" class=" rounded-3xl   object-cover" />
            <button id="btn-1"
                class="rounded-full z-10 px-4 py-2 bg-red-600 absolute top-0 right-0 text-xl text-white">x</button>
        </div>
    </div>
    <div id="modal2"
        class=" absolute bottom-0 inset-0 flex hidden items-center justify-center z-50 bg-[#00000080]  min-h-screen"
        style="backdrop-filter: blur(10px)">
        <div class="relative">
            <img src="https://i.ibb.co/cSfwb7vH/image.png" class=" rounded-3xl   object-cover" />
            <button id="btn-2"
                class="rounded-full z-10 px-4 py-2 bg-red-600 absolute top-0 right-0 text-xl text-white">x</button>
        </div>
    </div>




    @include('components.Sections.Home.Footer-home')
    <script>
        const miDiv1 = document.getElementById('imagen1');
        const miModal1 = document.getElementById('modal1');
        const btn1 = document.getElementById('btn-1');

        miDiv1.addEventListener('mouseover', () => {
            miModal1.classList.remove('hidden');
        });
        btn1.addEventListener('click', () => {
            miModal1.classList.add('hidden');
            console.log("hiciste click")
        });

        const miDiv2 = document.getElementById('imagen2');
        const miModal2 = document.getElementById('modal2');
        const btn2 = document.getElementById('btn-2');
        miDiv2.addEventListener('mouseover', () => {
            miModal2.classList.remove('hidden');
        });
        btn2.addEventListener('click', () => {
            miModal2.classList.add('hidden');
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>


</html>
