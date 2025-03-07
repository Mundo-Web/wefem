<div class="relative overflow-hidden pt-8 bg-[#EFE5FF]">
    <div class="bg-[#6745BA]">
        <div
            class="relative xl:max-w-5xl 2xl:max-w-7xl mx-auto text-white py-10 px-6 lg:px-0 flex flex-col items-center text-center">
            <div class=" md:ml-60 xl:ml-0 max-w-2xl mx-auto md:mx-0 relative z-10">
                <h2
                    class="text-[21.07px] md:text-[21.07px] leading-[25.28px] xl:text-[24.65px] 2xl:text-[27.65px] xl:leading-[33.18px] font-bold">
                    Una copa o
                    disco menstrual
                    en 5 años</h2>
                <div class="flex justify-center gap-10 mt-4">
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span
                            class="text-[24.99px] md:text-[24.99px] md:leading-[40.78px] xl:text-[28.79px] 2xl:text-[32.79px] 2xl:leading-[53.52px] font-bold text-[#E7FF57]">Reemplaza</span>
                        <h3 class="text-[90.94px] md:text-[111.94px] leading-[100.94px] md:leading-[111.94px] md:tracking-[9.99px]  xl:text-[136.9px] 2xl:text-[146.9px] tracking-[13.12px] xl:leading-[120.9px] 2xl:leading-[146.9px]  font-bebas count"
                            data-count="600">0
                        </h3>
                        <p
                            class="text-[15.84px] md:text-[18.84px] md:leading-[47.47px] xl:text-[20.14px] 2xl:text-[24.14px] 2xl:leading-[62.3px]">
                            Toallas higiénicas</p>
                    </div>
                    <div class="w-1/2 flex flex-col items-center justify-center">
                        <span
                            class="text-[24.99px] md:leading-[40.78px] xl:text-[28.79px] 2xl:text-[32.79px] 2xl:leading-[53.52px] font-bold text-[#E7FF57]">Ahorra</span>
                        <h3 class="text-[90.94px] md:text-[111.94px] leading-[100.94px] md:leading-[111.94px] md:tracking-[9.99px] xl:text-[136.9px] 2xl:text-[146.9px] tracking-[13.12px] xl:leading-[120.9px] 2xl:leading-[146.9px] font-bebas count"
                            data-count="900">0
                        </h3>
                        <p
                            class="text-[15.84px] md:text-[18.84px] md:leading-[47.47px]  xl:text-[20.14px] 2xl:text-[24.14px] 2xl:leading-[62.3px]">
                            Soles
                            Aprox</p>
                    </div>
                </div>
            </div>
            <img src="https://i.ibb.co/bj6rNvs7/1bc2a501a327fe55cf37f78fd57747ca.png" alt="Copa menstrual"
                class="hidden sm:block absolute -left-4 md:-left-36 2xl:-left-16 bottom-0 top-[-100px] h-[540px] z-0 transform scale-x-[-1]" />
            <img src="https://i.ibb.co/4nHfPP5q/49f3389e94334976b46ba6a4d0aea0e8.png" alt="Disco menstrual"
                class="hidden xl:block absolute right-0 md:-right-32 2xl:-right-12 bottom-0 top-[-60px] h-[470px] z-0 transform scale-x-[-1] -rotate-[8deg]" />
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
