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
    </style>
</head>

<body class="bg-white relative">



    <!--Header We Fem-->

    @include('components.Sections.Nosotros.Header')


    <main class="">
        @include('components.Sections.Home.Features')
        <div class="flex gap-8 px-[5%] md:max-w-5xl 2xl:max-w-7xl md:px-0 mx-auto py-12">

            <p class="font-poppins md:text-[18.45px] 2xl:text-[26.45px] leading-[30.67px] text-justify">
                weFem se enorgullece de contar con los más altos estándares de calidad y seguridad en la fabricación
                de todos nuestros productos menstruales. Poseemos el prestigioso registro sanitario de la FDA,
                asegurando que nuestros productos cumplen con las estrictas normas de salud y seguridad de los
                Estados Unidos. Además, hemos obtenido la certificación ISO 9001, un reconocimiento internacional
                que respalda nuestra dedicación a la excelencia en la gestión de calidad.
                <br /> <br />
                En el ámbito nacional,
                contamos con el registro sanitario de DIGEMID en Perú, demostrando nuestro compromiso con la salud y
                bienestar de nuestras usuarias peruanas. Estos logros reflejan nuestra constante búsqueda de la
                excelencia, garantizando a nuestras clientas la confianza de que nuestros productos son seguros,
                efectivos y fabricados con los más altos estándares de calidad a nivel mundial.
            </p>


            <img src="https://i.ibb.co/VWpc1dvr/image.png" class="w-[758px] h-[652px] object-cover" />

        </div>

        <div class="py-12 text-white  "
            style="background: rgb(128,113,182);
background: linear-gradient(90deg, rgba(128,113,182,1) 0%, rgba(192,175,225,1) 100%);">
            <div class="px-[5%] justify-around flex mx-auto gap-6">
                <img id="imagen1"
                    class=" brightness-0 grayscale-0 invert md:w-[150.97px] h-auto  2xl:w-[226.97px] 2xl:h-[169.95px] object-contain"
                    src="https://i.ibb.co/931mypkH/image.png" />
                <img class=" brightness-0 grayscale-0 invert md:w-[300.23px] h-auto 2xl:w-[428.23px] 2xl:h-[136.41px] object-contain"
                    src="https://i.ibb.co/NgMJf8d8/image.png" />
                <img id="imagen2"
                    class=" brightness-0 grayscale-0 invert md:w-[100.07px] h-auto 2xl:w-[171.07px] 2xl:h-[171.07px] object-contain"
                    src="https://i.ibb.co/sdGcCP7B/image.png" />
            </div>
        </div>
        @include('components.Sections.Nosotros.Beneficios')
        <div class="bg-[#FC58BE]">
            <div class="bg-[#FC58BE] py-12 flex items-center justify-center p-4">
                <div class=" flex flex-wrap justify-center gap-8  mx-auto">
                    <!-- Icono 1 -->
                    <div
                        class="md:w-[170px] md:h-[170px] 2xl:w-[200px] 2xl:h-[200px] border border-white rounded-full flex items-center justify-center transition-transform duration-300 ease-in-out flex-col  text-center hover:scale-105 cursor-pointer">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-graduation-cap text-white md:text-[40px] 2xl:text-[53px]"></i>
                            <p class="text-white md:text-[18.81px] 2xl:text-[21.81px] leading-[24.41px] max-w-[150px]">
                                Accesabilidad<br>y educación
                            </p>
                        </div>

                    </div>

                    <!-- Icono 2 -->
                    <div
                        class="md:w-[170px] md:h-[170px] 2xl:w-[200px] 2xl:h-[200px] border border-white rounded-full flex items-center justify-center transition-transform duration-300 ease-in-out flex-col  text-center hover:scale-105 cursor-pointer">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-lightbulb  text-white md:text-[40px] 2xl:text-[53px]"></i>
                            <p class="text-white md:text-[18.81px] 2xl:text-[21.81px] leading-tight max-w-[150px]">
                                Innovación<br>continua
                            </p>
                        </div>

                    </div>

                    <!-- Icono 3 -->
                    <div
                        class="md:w-[170px] md:h-[170px] 2xl:w-[200px] 2xl:h-[200px] border border-white rounded-full flex items-center justify-center transition-transform duration-300 ease-in-out  flex-col  text-center hover:scale-105 cursor-pointer">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-seedling  text-white md:text-[40px] 2xl:text-[53px]"></i>
                            <p class="text-white md:text-[18.81px] 2xl:text-[21.81px] leading-tight max-w-[150px]">
                                Accesabilidad<br>y educación
                            </p>
                        </div>

                    </div>

                    <!-- Icono 4 -->
                    <div
                        class="md:w-[170px] md:h-[170px] 2xl:w-[200px] 2xl:h-[200px] border border-white rounded-full flex items-center justify-center transition-transform duration-300 ease-in-out  flex-col  text-center hover:scale-105 cursor-pointer">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-venus  text-white md:text-[40px] 2xl:text-[53px]"></i>
                            <p class="text-white md:text-[18.81px] 2xl:text-[21.81px]leading-tight max-w-[150px]">
                                Sostenibilidad<br>ambiental
                            </p>
                        </div>

                    </div>

                    <!-- Icono 5 -->
                    <div
                        class=" md:w-[170px] md:h-[170px] 2xl:w-[200px] 2xl:h-[200px] border border-white rounded-full flex items-center justify-center transition-transform duration-300 ease-in-out flex-col text-center hover:scale-105 cursor-pointer">
                        <div class="icon-circle mb-4 flex flex-col gap-4">
                            <i class="fas fa-shield-alt  text-white md:text-[40px] 2xl:text-[53px]"></i>
                            <p class="text-white md:text-[18.81px] 2xl:text-[21.81px] leading-tight max-w-[150px]">
                                Calidad y<br>seguridad
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('components.Sections.Home.Section-instagram')


    </main>

    <div id="modal1" class="fixed inset-0 flex hidden items-center justify-center z-50 bg-[#00000080] min-h-screen"
        style="backdrop-filter: blur(10px)">
        <div class="relative flex items-center justify-center">
            <img src="https://i.ibb.co/XfWn6hNG/image.png" class="rounded-3xl max-h-[90vh] object-cover" />
            <button id="btn-1"
                class="rounded-full z-10 px-4 py-2 bg-[#5F48B7] absolute -top-2 -right-2 text-xl text-white">x</button>
        </div>
    </div>

    <div id="modal2" class="fixed inset-0 flex hidden items-center justify-center z-50 bg-[#00000080] min-h-screen"
        style="backdrop-filter: blur(10px)">
        <div class="relative flex items-center justify-center">
            <img src="https://i.ibb.co/cSfwb7vH/image.png" class="rounded-3xl max-h-[90vh] object-cover" />
            <button id="btn-2"
                class="rounded-full z-10 px-4 py-2 bg-[#5F48B7] absolute -top-2 -right-2 text-xl text-white">x</button>
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
