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


 <section class="relative py-10 bg-[#EFE5FF]" data-aos="fade-up" data-aos-duration="1000"
     data-aos-easing="ease-in-out-quart">
     <p
         class="px-[5%] mx-auto md:max-w-6xl 2xl:max-w-6xl md:px-0 md:text-[18.31px]  2xl:text-[23.31px] leading-[29.44px] ">
         Home / Tienda we Fem
         /
         <strong>wePack</strong>
     </p>
     <div
         class="px-[5%] mx-auto md:max-w-6xl 2xl:max-w-6xl  md:px-0  flex items-start flex-col md:flex-row  mt-4 gap-2 ">



         <div class="w-max h-max md:w-1/12 pr-2 2xl:pr-4">
             <img src="https://i.ibb.co/d4b37qjh/f7dbf1c4b1c1c7a425856f6ebcbcbce8.png" alt="wePack Product"
                 class="w-full h-auto object-cover " loading="lazy" />
         </div>
         <!-- Image -->
         <div class="w-max h-max md:w-[580.81px] md:h-[580.81px] 2xl:h-[638.72px] 2xl:w-[638.72px] pr-2 2xl:pr-4 ">
             <img src="https://i.ibb.co/d4b37qjh/f7dbf1c4b1c1c7a425856f6ebcbcbce8.png" alt="wePack Product"
                 class="md:w-[580.81px] md:h-[580.81px]  2xl:h-[638.72px] 2xl:w-[638.72px] object-cover  2xl:object-cover "
                 loading="lazy" />
         </div>
         <!-- Product Details -->
         <div class="w-[472px] text-[#333333]">

             <h3 class="md:text-[45.38px] 2xl:text-[54.38px] md:leading-[34.78px] 2xl:leading-[40.78px] font-bold">
                 wePack</h3>
             <p class="md:text-[20.81px] 2xl:text-[30.81px]  2xl:leading-[40.78px] 2xl:mt-2 font-normal">(Disco +
                 Esterilizador)
             </p>
             <p class="md:text-xs 2xl:text-[14.05px] leading-[21.75px] mt-2">
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f338',
                     'class' => 'h-[14.05px] inline-flex',
                 ])
                 Recipiente menstrual con el doble de capacidad que una copa, ideal para recolectar sangre y tener
                 relaciones sin preocupaciones durante tu periodo. ¡Libertad total!
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f319',
                     'class' => 'h-[14.05px] inline-flex',
                 ])
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f496',
                     'class' => 'h-[14.05px] inline-flex',
                 ])
             </p>
             <div
                 class="w-[155px] h-[25px] bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center text-[10.88px] leading-[21.75px]">
                 <p className="flex items-center justify-center gap-2">

                     @include('components.Emoji.EmojiApple', [
                         'emojiCode' => '1f525',
                         'class' => 'h-[11.88px] inline-flex',
                     ])
                     <span><span class="font-bold">AHORRA</span> S/ 75.00</span>
                     @include('components.Emoji.EmojiApple', [
                         'emojiCode' => '1f525',
                         'class' => 'h-[11.88px] inline-flex',
                     ])
                 </p>
             </div>
             <p
                 class="md:text-[35.33px]  2xl:text-[49.33px] leading-[62.31px] tracking-[-0.01em] font-bold text-[#FC58BE]">
                 S/. 169.90</p>
             <p class="md:text-[20.84px] 2xl:text-[24.84px] leading-[31.37px] text-[#B4B4B4]"><del>Antes S/. 255</del>
             </p>
             <div class="flex items-center mt-2">
                 <span class="text-[#FF9900] flex gap-1 text-base">
                     @for ($i = 0; $i < 5; $i++)
                         @include('components.Emoji.EmojiApple', [
                             'emojiCode' => '2b50',
                             'class' => 'h-[18.13px] inline-flex',
                         ])
                     @endfor
                 </span>
             </div>

             <div class="">
                 {{-- Selector de Color --}}
                 <div class="flex justify-between items-center my-2">
                     <div class="flex items-center gap-2">
                         <p class="text-[13.05px] leading-[13.05px] font-bold">Color:</p>
                         <div class="flex items-center gap-2">
                             <button onclick="setSelectedColor('purple')" id="color-purple"
                                 class="rounded-full flex items-center justify-center p-1 border border-[#222222]">
                                 <span class="w-[22px] h-[22px] rounded-full bg-[#C196E8]"></span>
                             </button>
                             <button onclick="setSelectedColor('pink')" id="color-pink"
                                 class="rounded-full flex items-center justify-center p-1 border border-[#DDDDDD]">
                                 <span class="w-[22px] h-[22px] rounded-full bg-[#EF62BA]"></span>
                             </button>
                         </div>
                     </div>

                     {{-- Botón de Guía de Tallas --}}
                     <div class="text-right">
                         <button
                             class="inline-flex gap-2 items-center justify-center w-[192.45px] h-[34.02px] font-medium text-[15.57px] leading-[15.95px] bg-[#5F48B7] text-white rounded-[8.51px]">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white mr-2" viewBox="0 0 640 512">
                                 <path d="M0 336c0 26.5 21.5 48 48 48l544 0c26.5 0 48-21.5
                48-48l0-160c0-26.5-21.5-48-48-48l-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0
                8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0
                8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0c-26.5
                0-48 21.5-48 48L0 336z" />
                             </svg>
                             ¿Cuál es mi talla?
                         </button>
                     </div>
                 </div>


                 {{-- Selector de Talla --}}
                 <div class="mb-6">
                     <label class="text-[13.05px] leading-[13.05px] font-bold">Selecciona tu talla:</label>
                     <div class="relative mt-2">
                         <select
                             class="w-full h-[48.94px] text-[14.05px] px-4 bg-[#EFEDF8] rounded-[5.44px] appearance-none cursor-pointer focus:outline-none">
                             <option>Talla A</option>
                             <option>Talla B</option>
                             <option>Talla C</option>
                         </select>
                         <div
                             class="absolute right-4 top-1/2 -translate-y-1/2 transition-transform duration-300 text-[#5F48B7] ">
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
                     <div
                         class="flex h-[37.16px] text-[#000000]  bg-[#EFEDF8] items-center justify-around  rounded-[5.44px] ">
                         <button onclick="changeQuantity(-1)"
                             class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">-</button>
                         <span id="quantity" class="text-xl font-medium">1</span>
                         <button onclick="changeQuantity(1)"
                             class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">+</button>
                     </div>
                 </div>

                 {{-- Botón Añadir al Carrito --}}
                 <button id="btn-buy"
                     class="relative w-full h-[39.88px]  text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[2.72px] border-[1.81px] border-[#FC58BE]  flex items-center justify-center">
                     <span class="">Añadir al carrito</span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="fill-white h-3 absolute  top-1/2 -translate-y-1/2  right-16 ">
                         <path
                             d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                     </svg>
                 </button>
             </div>

             {{-- Script JavaScript --}}
             <script>
                 let selectedColor = "purple";
                 let quantity = 1;

                 function setSelectedColor(color) {
                     selectedColor = color;
                     document.getElementById("color-purple").classList.remove("border-[#C196E8]");
                     document.getElementById("color-pink").classList.remove("border-[#C196E8]");

                     if (color === "purple") {
                         document.getElementById("color-purple").classList.add("border-[#C196E8]");
                     } else {
                         document.getElementById("color-pink").classList.add("border-[#C196E8]");
                     }
                 }

                 function changeQuantity(amount) {
                     quantity = Math.max(1, quantity + amount);
                     document.getElementById("quantity").innerText = quantity;
                 }
             </script>

         </div>
     </div>
     <div id="modal" class="fixed inset-0 flex hidden  items-center justify-center z-50 bg-[#00000080] min-h-screen"
         style="backdrop-filter: blur(10px)">
         <div class="relative flex items-center justify-center">
             <div
                 class="bg-white  rounded-[48.58px] md:w-[619px] md:h-[605.40px] 2xl:w-[819px] 2xl:h-[805.40px] flex flex-col items-center justify-center ">

                 <div
                     class="mx-auto font-bold flex items-center justify-center bg-[#FF9900] text-white md:text-[20px] 2xl:text-[35.85px] 2xl:leading-[53.78px] md:h-[50.26px] md:w-[342.05px] 2xl:h-[59.26px] 2xl:w-[442.05px] rounded-full">
                     Solo por 00 : 10 : 58
                 </div>

                 <p class="text-[#404040] md:text-[29.29px] 2xl:text-[39.29px] leading-[58.94px] font-bold pt-6">¿Te
                     gustaría añadir a tu
                     pedido?
                 </p>

                 <div class=" gap-4 flex items-center justify-between mt-4">
                     <img class="md:w-[238.05px] md:h-[401.16px] 2xl:w-[338.05px] 2xl:h-[501.16px] object-contain"
                         src="https://i.ibb.co/MkgMJPzG/63d3b57a154aa23fe06f27206861c787.png" />
                     <div
                         class="font-mont flex items-start justify-start flex-col md:w-[290.05px] 2xl:w-[400.05px] md:gap-2 2xl:gap-4">
                         <p
                             class="text-[#000000]  md:text-[40.24px] 2xl:text-[55.24px] md:leading-[50.05px] 2xl:leading-[69.05px] font-mont font-semibold">
                             Lubricante
                         </p>
                         <p
                             class="text-[#000000] md:text-[16.1px] 2xl:text-[22.1px] leading-[27.63px] tracking-[0.28px] font-mont">
                             Te
                             ayudará a colocar más
                             fácil tu copa o disco @include('components.Emoji.EmojiApple', [
                                 'emojiCode' => '1f4a7',
                                 'class' => 'md:h-[18.1px] 2xl:h-[22.05px] inline-flex',
                             ])</p>
                         <p
                             class="md:text-[78.2px] 2xl:text-[93.2px] md:leading-[90.5px]  2xl:leading-[116.5px] tracking-[-2.18px] text-[#FC58BE] font-black">
                             S/25
                         </p>
                         <p
                             class="md:text-[20.4px] 2xl:text-[33.4px] leading-[41.75px] tracking-[0.42px] text-[#000000]">
                             P. regular S/30</p>
                         <a href="/checkout"
                             class="inline-flex text-white  items-center justify-center md:h-[70px] 2xl:h-[108px] md:w-[250px] 2xl:w-[338px] bg-[#FC58BE] md:mt-4 2xl:mt-0 md:rounded-[12.58px] 2xl:rounded-[19.58px] md:text-[22.99px]  2xl:text-[32.99px] leading-[41.24px] tracking-[0.41px] font-bold ">¡Lo
                             quiero!</a>

                     </div>

                 </div>
                 <button id="close-modal"
                     class=" z-10 px-4 py-2  absolute top-2 right-4 text-3xl font-bold text-[#9577B9]">x</button>
             </div>
         </div>
         <script>
             document.getElementById("btn-buy").addEventListener("click", function() {
                 let modal = document.getElementById("modal");
                 if (modal) {
                     modal.classList.remove("hidden"); // Mostrar el modal si estaba oculto
                 } else {
                     console.error("No se encontró el modal con id='modal'");
                 }
             });

             // Cerrar el modal (agregar en el botón de cerrar dentro del modal)
             document.getElementById("close-modal").addEventListener("click", function() {
                 let modal = document.getElementById("modal");
                 if (modal) {
                     modal.classList.add("hidden"); // Ocultar el modal
                 }
             });
         </script>

 </section>
