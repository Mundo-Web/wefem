<div class="relative overflow-hidden pt-8 bg-[#F2F2F2]">
    <div class="bg-[#6745BA]">
        <div class="relative mx-auto text-white py-10 px-6 flex flex-col items-center text-center">
            <div class="max-w-2xl mx-auto relative z-10">
                <h2 class="text-[27.65px] leading-[33.18px] font-bold">Una copa o disco menstrual en 5 años</h2>
                <div class="flex justify-center gap-10 mt-4">
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span class="text-[32.79px] leading-[53.52px] font-bold text-[#E7FF57]">Reemplaza</span>
                        <h3 class="text-[146.9px] tracking-[13.12px] leading-[146.9px]  font-bebas count"
                            data-count="600">0
                        </h3>
                        <p class="text-[24.14px] leading-[62.3px]">Toallas higiénicas</p>
                    </div>
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span class="text-[32.79px] leading-[53.52px] font-bold text-[#E7FF57]">Ahorra</span>
                        <h3 class="text-[146.9px] tracking-[13.12px] leading-[146.9px] font-bebas count"
                            data-count="900">0
                        </h3>
                        <p class="text-[24.14px] leading-[62.3px]">Soles Aprox</p>
                    </div>
                </div>
            </div>
            <img src="https://i.ibb.co/bj6rNvs7/1bc2a501a327fe55cf37f78fd57747ca.png" alt="Copa menstrual"
                class="absolute -left-4 bottom-0 top-[-100px] h-[570px] z-0 transform scale-x-[-1]" />
            <img src="https://i.ibb.co/4nHfPP5q/49f3389e94334976b46ba6a4d0aea0e8.png" alt="Disco menstrual"
                class="absolute right-0 bottom-0 top-[-60px] h-[500px] z-0 transform scale-x-[-1] -rotate-12" />
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
