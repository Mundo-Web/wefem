 <section class="py-10 px-[5%] mx-auto font-font-general bg-white" data-aos="fade-up" data-aos-duration="1000"
     data-aos-easing="ease-in-out-quart">
     <h2
         class="text-[36.25px] leading-[29.36px] font-bold text-[#212529] my-6 text-center flex gap-2 items-center justify-center">
         @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])
         El más vendido
         @include('components.Emoji.EmojiApple', ['emojiCode' => '1f525', 'class' => 'h-[25px]'])</h2>
     <div class="mx-auto flex justify-center items-center  mt-4 gap-8">

         <!-- Image -->
         <div class="w-[620.81px] h-[620.81px] overflow-hidden order-1">
             <img src="https://i.ibb.co/fYP8Ttk7/image.png" alt="wePack Product"
                 class="w-[620.81px] h-[620.81px] object-cover rounded-lg" loading="lazy" />
         </div>
         <!-- Product Details -->
         <div class="w-[475px] text-[#333333]">

             <h3 class="text-[54.38px] leading-[60.78px] font-bold">¿Aún no estás segura?</h3>
             <p class="text-[29px] leading-[36px] mt-2 ">Prueba con el Disco<br />
                 Menstrual Descartable</p>
             <p class="text-[14.05px] leading-[21.75px] mt-2">
                 @include('components.Emoji.EmojiApple', [
                     'emojiCode' => '1f338',
                     'class' => 'h-[14.05px] inline-flex',
                 ])
                 Recipiente menstrual con el doble de capacidad que una copa, ideal para probar si se acomoda a ti antes
                 de comprar un Disco menstrual ¡Dura 1 solo ciclo!
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
                 class="w-[155px] h-[25px] mt-8 bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center text-[10.88px] leading-[21.75px]">
                 <p className="flex items-center justify-center gap-2">

                     @include('components.Emoji.EmojiApple', [
                         'emojiCode' => '1f525',
                         'class' => 'h-[11.88px] inline-flex',
                     ])
                     <span><span class="font-bold">AHORRA</span> S/ 45.00</span>
                     @include('components.Emoji.EmojiApple', [
                         'emojiCode' => '1f525',
                         'class' => 'h-[11.88px] inline-flex',
                     ])
                 </p>
             </div>
             <p class="text-[49.33px] leading-[62.31px] tracking-[-0.01em] font-bold text-[#FC58BE]">$/. 39.90</p>
             <p class="text-[24.84px] leading-[31.37px] text-[#B4B4B4]"><del>Antes $/. 59.90</del></p>

             <div class="">

                 {{-- Botón Añadir al Carrito --}}
                 <button
                     class="mt-4 relative w-full h-[39.88px]  text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[2.72px] border-[1.81px] border-[#FC58BE]  flex items-center justify-center">
                     <span class="">Añadir al carrito</span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="fill-white h-3 absolute  top-1/2 -translate-y-1/2  right-16 ">
                         <path
                             d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                     </svg>
                 </button>
             </div>



         </div>
     </div>
 </section>
