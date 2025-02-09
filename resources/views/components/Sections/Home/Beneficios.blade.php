<div class="relative overflow-hidden pt-8 bg-[#EFE5FF]">
    <div class="bg-[#6745BA]">
        <div class="relative mx-auto  text-white py-10 px-6 flex flex-col items-center text-center " data-aos="fade-up"
            data-aos-duration="1000" data-aos-easing="ease-in-out-quart">
            <!-- Contenido de la sección -->
            <div class="max-w-2xl mx-auto relative z-10 ">
                <h2 class="text-3xl font-bold">Una copa o disco menstrual en 5 años</h2>
                <div class="flex justify-center gap-10 mt-4">
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span class="text-4xl font-bold text-[#E7FF57]">Reemplaza</span>
                        <h3 class="text-[146px] tracking-[13px] leading-[146px]  font-bebas count" data-count="600">0
                        </h3>
                        <p class="text-2xl">Toallas higiénicas</p>
                    </div>
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span class="text-4xl font-bold text-[#E7FF57]">Ahorra</span>
                        <h3 class="text-[146px] tracking-[13px] leading-[146px]  font-bebas count" data-count="900">0
                        </h3>
                        <p class="text-2xl">Soles Aprox</p>
                    </div>
                </div>
            </div>

            <!-- Imágenes de las manos sobresaliendo -->
            <img src="https://i.ibb.co/bj6rNvs7/1bc2a501a327fe55cf37f78fd57747ca.png" alt="Copa menstrual"
                class="absolute -left-4 bottom-0 top-[-100px] h-[570px] z-0 transform  scale-x-[-1] " />
            <img src="https://i.ibb.co/4nHfPP5q/49f3389e94334976b46ba6a4d0aea0e8.png" alt="Disco menstrual"
                class="absolute right-0 bottom-0 top-[-60px] h-[500px] z-0 transform  scale-x-[-1] -rotate-12 " />
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
