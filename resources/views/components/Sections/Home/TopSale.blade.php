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


 <section class="py-10 px-[5%] mx-auto font-font-general bg-white">
     <h2
         class="md:text-[30.25px] 2xl:text-[36.25px] leading-[29.36px] font-bold text-[#212529] mt-6 mb-10 text-center flex gap-2 items-center justify-center">
         @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])
         El más vendido
         @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])</h2>
     <div class="mx-auto  flex flex-col xl:flex-row justify-center items-center  my-4 gap-8">

         <!-- Image -->
         <div
             class="md:w-[644px] md:h-[644px] xl:w-[500.81px] xl:h-[500.81px]  2xl:w-[620.81px] 2xl:h-[620.81px] overflow-hidden">
             <img src="https://i.ibb.co/1tsnJxPj/image.png" alt="wePack Product"
                 class="md:w-[644px] md:h-[644px]  xl:w-[500.81px] xl:h-[500.81px]  2xl:w-[620.81px] 2xl:h-[620.81px] object-cover rounded-lg"
                 loading="lazy" />
         </div>
         <!-- Product Details -->
         <div class="hidden xl:block xl:w-[350px] 2xl:w-[475px] text-[#333333]">

             <h3 class="md:text-[40.38px] 2xl:text-[54.38px] md:leading-[30.78px] 2xl:leading-[40.78px] font-bold">wePack
             </h3>
             <p class="md:text-[16.81px] 2xl:text-[30.81px] 2xl:leading-[40.78px] mt-2 font-normal">(Disco +
                 Esterilizador)
             </p>
             <p class="md:text-[11px] 2xl:text-[14.05px] md:leading-[18.75px] 2xl:leading-[21.75px] mt-2">
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
                 class="md:w-[120px]  2xl:w-[155px] md:h-[20px] 2xl:h-[25px] bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center md:text-[8.88px] 2xl:text-[10.88px] leading-[21.75px]">
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
                 class="md:text-[35.33px]  2xl:text-[49.33px] md:leading-[42.31px] 2xl:leading-[62.31px] tracking-[-0.01em] font-bold text-[#FC58BE]">
                 S/ 169.90</p>
             <p class="md:text-[18.84px] 2xl:text-[24.84px] leading-[31.37px] text-[#B4B4B4]"><del>Antes S/ 255</del>
             </p>
             <div class="flex items-center mt-2">
                 <span class="text-[#FF9900] flex gap-1 text-base">
                     @for ($i = 0; $i < 5; $i++)
                         @include('components.Emoji.EmojiApple', [
                             'emojiCode' => '2b50',
                             'class' => 'md:h-[14.13px] 2xl:h-[18.13px] inline-flex',
                         ])
                     @endfor
                 </span>
             </div>

             <div class="">
                 {{-- Selector de Color --}}
                 <div class="flex justify-between items-center my-2 relative">
                     <div class="flex items-start gap-2">
                         <p class=" md:text-[10.05px] 2xl:text-[13.05px] leading-[13.05px] mt-1 font-bold">Color:</p>
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
                     <div class="text-right absolute right-0 top-6 ">
                         <button
                             class="inline-flex md:gap-2 2xl:gap-0 items-center justify-center md:w-[180.45px] 2xl:w-[187.45px] h-[34.02px] font-medium md:text-[12.05px] 2xl:text-[15.57px] leading-[15.95px] bg-[#5F48B7] text-white rounded-[8.51px]">
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
                 <div class="mb-4 2xl:mb-6">
                     <label class="md:text-[10.05px] 2xl:text-[13.05px] leading-[13.05px] font-bold">Selecciona tu
                         talla:</label>
                     <div class="relative mt-2">
                         <select
                             class="w-full h-[40.94px] 2xl:h-[48.94px] md:text-[12.05px] 2xl:text-[14.05px] px-4 bg-[#EFEDF8] rounded-[5.44px] appearance-none  outline-none ring-0 border-0 cursor-pointer focus:outline-none">
                             <option>Talla A</option>
                             <option>Talla B</option>
                             <option>Talla C</option>
                         </select>

                     </div>
                 </div>



                 {{-- Selector de Cantidad --}}
                 <div class="mb-4 2xl:mb-6">
                     <div
                         class="flex h-[37.16px] text-[#000000]  bg-[#EFEDF8] items-center justify-around  rounded-[5.44px] ">
                         <button onclick="changeQuantity(-1)"
                             class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">-</button>
                         <span id="quantity" class="md:text-base 2xl:text-xl font-medium">1</span>
                         <button onclick="changeQuantity(1)"
                             class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">+</button>
                     </div>
                 </div>

                 {{-- Botón Añadir al Carrito --}}
                 <button
                     class="relative w-full md:h-[35.88px] 2xl:h-[39.88px] md:text-[10.59px]  2xl:text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[2.72px] border-[1.81px] border-[#FC58BE]  flex items-center justify-center">
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

         <div class="md:w-[644px] xl:hidden text-[#333333]">

             <h3 class="hidden md:block md:text-[55.58px]  md:leading-[41.69px]  font-bold">
                 wePack
                 <span class=" md:text-[31.5px] md:leading-[41.69px]   font-normal">(Disco +
                     Esterilizador)
                 </span>
             </h3>
             <h3 class="text-[55.58px] md:hidden leading-[33.78px] 2xl:leading-[40.78px] font-bold">
                 wePack
             </h3>
             <p class="text-[31.5px] md:hidden 2xl:text-[30.81px] 2xl:leading-[40.78px] mt-2 font-normal">(Disco +
                 Esterilizador)
             </p>
             <p class="md:text-[14.36px]  md:leading-[18.75px]  mt-2">
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f338',
                     'class' => 'h-[15.05px] inline-flex',
                 ])
                 Recipiente menstrual con el doble de capacidad que una copa, ideal para recolectar sangre y tener
                 relaciones sin preocupaciones durante tu periodo. ¡Libertad total!
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f319',
                     'class' => 'h-[15.05px] inline-flex',
                 ])
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f496',
                     'class' => 'h-[15.05px] inline-flex',
                 ])
             </p>
             <div
                 class="w-[158.43px]   md:h-[25.55px]  bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center text-[11.12px]  leading-[21.75px]">
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
                 class="text-[40.42px] md:text-[50.42px]   md:leading-[50.42px] tracking-[-0.01em] font-bold text-[#FC58BE]">
                 S/ 169.90
                 <span class="text-[20.39px] md:text-[25.39px]  leading-[32.07px] text-[#B4B4B4] font-normal"><del>Antes
                         S/ 255</del>
                 </span>
             </p>



             <div class="">
                 {{-- Selector de Color --}}
                 <div class="flex justify-between md:justify-start gap-4 items-center my-2 relative">
                     <div class="flex items-start gap-2">
                         <p class=" md:text-[10.05px] 2xl:text-[13.05px] leading-[13.05px] mt-1 font-bold">Color:</p>
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
                     <div class=" ">
                         <button
                             class="inline-flex md:gap-2 2xl:gap-0 items-center justify-center w-[180.45px] 2xl:w-[187.45px] h-[34.02px] font-medium text-[12.05px] 2xl:text-[15.57px] leading-[15.95px] bg-[#5F48B7] text-white rounded-[8.51px]">
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
                 <div class="mb-4 2xl:mb-6">
                     <label class="md:text-[10.05px] 2xl:text-[13.05px] leading-[13.05px] font-bold">Selecciona tu
                         talla:</label>
                     <div class="flex gap-2 mb-4">
                         <div class="relative mt-2 w-1/2">
                             <select
                                 class="w-full h-[40.94px] 2xl:h-[48.94px] md:text-[12.05px] 2xl:text-[14.05px] px-4 bg-[#EFEDF8] rounded-[5.44px] appearance-none  outline-none ring-0 border-0 cursor-pointer focus:outline-none">
                                 <option>Talla A</option>
                                 <option>Talla B</option>
                                 <option>Talla C</option>
                             </select>

                         </div>
                         {{-- Selector de Cantidad --}}
                         <div class="relative mt-2 w-1/2">
                             <div
                                 class="flex h-[37.16px] text-[#000000]  bg-[#EFEDF8] items-center justify-around  rounded-[5.44px] ">
                                 <button onclick="changeQuantity(-1)"
                                     class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">-</button>
                                 <span id="quantity" class="md:text-base 2xl:text-xl font-medium">1</span>
                                 <button onclick="changeQuantity(1)"
                                     class="w-8 h-8 flex items-center justify-center text-[17.84px] text-[#444444]">+</button>
                             </div>
                         </div>
                     </div>

                 </div>




                 {{-- Botón Añadir al Carrito --}}
                 <div class="flex items-center justify-center gap-4 mt-4">
                     <button
                         class="relative w-full md:w-[332px] h-[59px] md:text-[17.02px]  2xl:text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[6px] border-[1.81px] border-[#FC58BE]  flex items-center gap-4 justify-center">
                         <span class="">Añadir al carrito</span>
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-white h-4  ">
                             <path
                                 d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                         </svg>
                     </button>
                 </div>
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
 </section>
