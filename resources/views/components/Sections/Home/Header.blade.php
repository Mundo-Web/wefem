<div>

    <div
        class="text-center font-font-general tracking-[0.15em]  px-[5%] py-3 bg-[#6048B7] text-white text-[16.21px] leading-6 uppercase">
        <span class="text-[#DDEC4C] font-bold ">¡ENVÍO GRATIS</span> A TODO LIMA METROPOLITANA!
    </div>



    <section class="relative w-full h-[550px]">


        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover object-top">
            <source src="{{ asset('background-hero.mp4') }}" type="video/mp4" />
            Tu navegador no soporta la reproducción de video.
        </video>




        <div class="absolute inset-0 bg-[rgba(95,72,183,0.4)]">
        </div>


        <header
            class="hidden lg:block transition-all duration-300 sticky top-0 w-full z-40 font-font-general  text-white bg-transparent p-4">
            <div
                class="md:px-[5%] lg:max-w-7xl mx-auto flex justify-between items-center font-medium text-[14.84px] leading-[18.55px]">
                <nav class="flex gap-8 ">
                    <a href="/catalogo">Tienda</a>
                    <a href="/como-usar">¿Cómo usar?</a>
                    <a href="/nosotros">Nosotrxs</a>
                    <a href="/quiz">Quiz</a>
                </nav>
                <a href="/" class="flex justify-start">
                    <img src="https://i.ibb.co/Z1H5rGzn/image.png" alt="Wefem"
                        class="h-[36.8px] w-[210.55px] object-cover object-top" />
                </a>
                <div class="flex space-x-4 text-[22.93px] items-center">
                    <a href="#" class="text-[14.84px]">Escríbenos</a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>

                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </header>

        <header
            class=" lg:hidden transition-all duration-300 sticky top-0 w-full z-40 font-font-general  text-white bg-transparent p-4">
            <div
                class="md:px-[5%] lg:max-w-7xl mx-auto flex justify-between items-center font-medium text-[14.84px] leading-[18.55px]">

                <div class="flex gap-2 sm:gap-4 items-center">
                    <button class="h-6">
                        <i class="fa-solid fa-bars  fa-lg"></i>
                    </button>
                    <a href="/" class="flex justify-start">
                        <img src="https://i.ibb.co/Z1H5rGzn/image.png" alt="Wefem"
                            class="h-[27.8px] w-[150.55px] sm:h-[36.8px] sm:w-[210.55px] object-cover object-top" />
                    </a>
                </div>
                <div class="flex items-center gap-2 sm:gap-4">
                    <a href="/quiz">Quiz</a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </header>


        <div class="absolute inset-0 flex items-center justify-center text-center">
            <div class="text-white p-6">
                <h1
                    class="text-[40.66px] leading-[100%] tracking-[1%] md:text-[58.54px] 2xl:text-[78.54px] md:leading-[60.81px] 2xl:leading-[90.81px] font-bold max-w-4xl ">
                    ¡Tener sexo
                    con<br /> tu disco es posible!</h1>
                <p
                    class="text-[17.13px] mt-4 md:mt-0 leading-[100%]  md:text-[20.61px] 2xl:text-[24.61px] md:leading-[36.92px]  my-2 tracking-[1%]">
                    Copas y
                    Discos menstruales weFem
                </p>
                <button
                    class="mt-4 w-[240.19px] h-[50.67px] md:w-[258.19px] md:h-[55.67px] xl:w-[350px]  2xl:w-[371px] xl:h-[70px] 2xl:h-[80px] bg-[#DDEC4C] md:text-[17.15px] xl:text-[20.64px] 2xl:text-[24.64px] hover:brightness-90 transition duration-300  font-semibold  rounded-[13.91px] text-[#5F48B7] tracking-[1%]">
                    ¡Realiza el cambio!
                </button>
            </div>
        </div>
    </section>
</div>
<script>
    window.addEventListener("scroll", function() {
        var header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("bg-[#5339B1]"); // Cambia el color de fondo cuando se hace scroll

        } else {
            header.classList.remove("bg-transparent");

        }
    });
</script>
