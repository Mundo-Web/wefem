<div class="relative overflow-hidden  bg-[#D9DE21]">
    <div class="bg-[#D9DE21] max-w-7xl mx-auto  ">
        <div class="relative mx-auto  text-white py-10 px-6 flex flex-col items-center text-center " data-aos="fade-up"
            data-aos-duration="1000" data-aos-easing="ease-in-out-quart">
            <!-- Imágenes de las manos sobresaliendo -->
            <img src="https://i.ibb.co/bj6rNvs7/1bc2a501a327fe55cf37f78fd57747ca.png" alt="Copa menstrual"
                class="  absolute -left-[200px] bottom-0  top-[100px] h-[900px] z-0 transform  scale-x-[-1] w-[450px] object-cover " />

            <!-- Contenido de la sección -->
            <div class="px-[5%] mx-auto relative z-10 grid grid-cols-2 gap-y-16 py-20 ">
                <!-- Primera fila -->
                <div class="flex flex-col items-center text-center">
                    <div class="text-[199.31px] leading-none  font-bold text-white mb-2"
                        style="text-shadow: 1.98px 3.96px 18.73px 0px #00000033;">+3K</div>
                    <div class="-rotate-2 w-[369.09px] text-white px-5 py-2 font-bold  text-[31.61px] bg-[#F750BD] ">
                        Clientes satisfechos
                    </div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="text-[199.31px] leading-none  font-bold text-white mb-2"
                        style="text-shadow: 1.98px 3.96px 18.73px 0px #00000033;">+4</div>
                    <div class="-rotate-2  w-[369.09px] text-white px-5 py-2 font-bold  text-[31.61px] bg-[#F750BD] ">
                        años en el mercado
                    </div>
                </div>
                <!-- Segunda fila -->
                <div class="flex flex-col items-center text-center">
                    <div class="text-[199.31px] leading-none  font-bold text-white mb-2"
                        style="text-shadow: 1.98px 3.96px 18.73px 0px #00000033;">+6K</div>
                    <div class="-rotate-2  w-[369.09px]  text-white px-5 py-2 font-bold  text-[31.61px] bg-[#F750BD] ">
                        copas vendidas
                    </div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="text-[199.31px] leading-none  font-bold text-white mb-2"
                        style="text-shadow: 1.98px 3.96px 18.73px 0px #00000033;">+4K</div>
                    <div class="-rotate-2  w-[369.09px] text-white px-5 py-2 font-bold  text-[31.61px] bg-[#F750BD] ">
                        discos vendidos
                    </div>
                </div>
            </div>


            <img src="https://i.ibb.co/4nHfPP5q/49f3389e94334976b46ba6a4d0aea0e8.png" alt="Disco menstrual"
                class=" absolute -right-[230px] bottom-0 top-[150px] h-[700px] z-20 transform   " />
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function animateCounter(element, target, duration) {
            let start = 0;
            let stepTime = Math.abs(Math.floor(duration / target));

            let timer = setInterval(() => {
                start += 1;
                element.textContent = start;

                if (start >= target) {
                    clearInterval(timer);
                    element.textContent = target; // Asegura que el número final sea exacto
                }
            }, stepTime);
        }

        // Configurar Intersection Observer
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let el = entry.target;
                    let target = parseInt(el.getAttribute("data-count"));
                    animateCounter(el, target, 2000); // 2000ms = 2 segundos de animación
                    observer.unobserve(el); // Dejar de observar después de activarlo una vez
                }
            });
        }, {
            threshold: 0.5
        }); // Se activa cuando el 50% del elemento es visible

        // Seleccionar todos los elementos de conteo y observarlos
        document.querySelectorAll(".count").forEach(el => observer.observe(el));
    });
</script>
