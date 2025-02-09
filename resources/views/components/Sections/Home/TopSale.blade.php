 <style>
     select {
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
     }

     select::-ms-expand {
         display: none;
     }
 </style>


 <section class="py-10">
     <h2 class="text-4xl font-bold my-6 text-center">🔥 El más vendido 🔥</h2>
     <div class="max-w-5xl mx-auto flex flex-col md:flex-row  mt-4 gap-2">

         <!-- Image -->
         <div class="w-full md:w-7/12 pr-4">
             <img src="https://i.ibb.co/1tsnJxPj/image.png" alt="wePack Product"
                 class="w-full h-full object-cover rounded-lg " loading="lazy" />
         </div>
         <!-- Product Details -->
         <div class="w-full md:w-5/12">

             <h3 class="text-[54px] font-bold leading-10">wePack</h3>
             <p class="text-3xl font-normal leading-10">(Disco + Esterilizador)</p>
             <p class="text-sm mt-2">
                 🌼 Recipiente menstrual con el doble de capacidad que una copa, ideal para recolectar sangre y tener
                 relaciones sin preocupaciones durante tu periodo. ¡Libertad total! 🌙💖
             </p>
             <div class="px-1 py-2 bg-black w-max text-white rounded-xl my-4">🔥 AHORRA S/ 75.00 🔥</div>
             <p class="text-5xl font-bold text-[#FC58BE] mt-4">$/. 169.90</p>
             <p class="text-2xl text-[#B4B4B4]"><del>Antes $/. 255</del></p>
             <div class="flex items-center mt-4">
                 <span class="text-[#FF9900] text-base">⭐⭐⭐⭐⭐</span>
             </div>

             <div class="max-w-md mx-auto pt-4">
                 {{-- Selector de Color --}}
                 <div class="mb-6 flex justify-between">
                     <div>
                         <label class=" text-sm font-bold">Color:</label>
                         <div class="flex gap-2 mt-2">
                             <button onclick="setSelectedColor('purple')" id="color-purple"
                                 class="w-8 h-8 rounded-full border-2 border-transparent">
                                 <span class="block w-6 h-6 rounded-full bg-[#9747FF] mx-auto"></span>
                             </button>
                             <button onclick="setSelectedColor('pink')" id="color-pink"
                                 class="w-8 h-8 rounded-full border-2 border-transparent">
                                 <span class="block w-6 h-6 rounded-full bg-[#FF47B5] mx-auto"></span>
                             </button>
                         </div>
                     </div>
                     {{-- Botón de Guía de Tallas --}}
                     <div class="text-right mb-6">
                         <button class="inline-flex items-center px-6 py-3 bg-[#5F48B7] text-white rounded-xl">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white mr-2"
                                 viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                 <path
                                     d="M0 336c0 26.5 21.5 48 48 48l544 0c26.5 0 48-21.5 48-48l0-160c0-26.5-21.5-48-48-48l-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0c-26.5 0-48 21.5-48 48L0 336z" />
                             </svg>
                             ¿Cuál es mi talla?
                         </button>
                     </div>
                 </div>

                 {{-- Selector de Talla --}}
                 <div class="mb-6">
                     <label class="text-gray-800 text-sm font-bold">Selecciona tu talla:</label>
                     <div class="relative mt-2">
                         <select class="w-full p-4 bg-[#F8F6FE] rounded-lg appearance-none cursor-pointer pr-10">
                             <option>Talla A</option>
                             <option>Talla B</option>
                             <option>Talla C</option>
                         </select>
                         <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M4 6L8 10L12 6" stroke="#9747FF" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" />
                             </svg>
                         </div>
                     </div>
                 </div>



                 {{-- Selector de Cantidad --}}
                 <div class="mb-6">
                     <div class="flex items-center justify-between bg-[#F8F6FE] rounded-lg p-4">
                         <button onclick="changeQuantity(-1)"
                             class="w-8 h-8 flex items-center justify-center text-2xl text-gray-600">-</button>
                         <span id="quantity" class="text-xl font-medium">1</span>
                         <button onclick="changeQuantity(1)"
                             class="w-8 h-8 flex items-center justify-center text-2xl text-gray-600">+</button>
                     </div>
                 </div>

                 {{-- Botón Añadir al Carrito --}}
                 <button
                     class="w-full bg-[#FC58BE] text-white py-4 rounded-lg flex items-center justify-center space-x-2">
                     <span>Añadir al carrito</span>
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"
                             stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path
                             d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"
                             stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path
                             d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"
                             stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                 </button>
             </div>

             {{-- Script JavaScript --}}
             <script>
                 let selectedColor = "purple";
                 let quantity = 1;

                 function setSelectedColor(color) {
                     selectedColor = color;
                     document.getElementById("color-purple").classList.remove("border-gray-400");
                     document.getElementById("color-pink").classList.remove("border-gray-400");

                     if (color === "purple") {
                         document.getElementById("color-purple").classList.add("border-gray-400");
                     } else {
                         document.getElementById("color-pink").classList.add("border-gray-400");
                     }
                 }

                 function changeQuantity(amount) {
                     quantity = Math.max(1, quantity + amount);
                     document.getElementById("quantity").innerText = quantity;
                 }
             </script>

         </div>
     </div>
 </section>
