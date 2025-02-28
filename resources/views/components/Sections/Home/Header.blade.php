<div>

    <div
        class="text-center font-font-general tracking-[0.15em]  px-[5%] py-3 bg-[#6048B7] text-white text-[16.21px] leading-6 uppercase">
        <span class="text-[#DDEC4C] font-bold ">¡ENVÍO GRATIS</span> A TODO LIMA METROPOLITANA!
    </div>



    <section class="relative w-full h-screen">


        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover object-top">
            <source src="{{ asset('background-hero.mp4') }}" type="video/mp4" />
            Tu navegador no soporta la reproducción de video.
        </video>




        <div class="absolute inset-0 bg-[#5F48B766] "></div>


        <header
            class=" transition-all duration-300 sticky top-0 w-full z-40 font-font-general  text-white bg-transparent p-4">
            <div
                class="md:px-[5%] mx-auto flex justify-between items-center font-medium text-[14.84px] leading-[18.55px]">
                <nav class="flex gap-8 w-4/12">
                    <a href="/catalogo">Tienda</a>
                    <a href="/comousar">¿Cómo usar?</a>
                    <a href="/nosotros">Nosotros</a>
                    <a href="/quiz">Quiz</a>
                </nav>
                <a href="/" class="w-4/12 flex justify-start">
                    <img src="https://i.ibb.co/Z1H5rGzn/image.png" alt="Wefem"
                        class="h-[36.8px] w-[210.55px] object-cover object-top" />
                </a>
                <div class="flex space-x-4 w-4+/12">
                    <a href="#">Escríbenos</a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </header>


        <div class="absolute inset-0 flex items-center justify-center text-center">
            <div class="text-white p-6">
                <h1 class=" md:text-[78px] leading-[100px] font-bold max-w-4xl tracking-[0.01em]">¡Tener sexo
                    con<br /> tu disco es posible!</h1>
                <p class="text-[24.61px] leading-[36.92px]  my-2 tracking-[0.01em]">Copas y Discos menstruales weFem
                </p>
                <button
                    class="mt-4 w-[371px] h-[80px] bg-[#DDEC4C] text-[24.64px] hover:brightness-90 transition duration-300 text-lg font-semibold  rounded-[13.91px] text-[#5F48B7]">
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
