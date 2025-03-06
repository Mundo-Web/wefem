<div class="flex w-full justify-between gap-8 bg-[#EFE5FF]  items-center">
    <div class="flex  flex-col w-full md:w-1/2 justify-center text-[#212529]">
        <div class="px-[5%] md:px-0 md:max-w-lg 2xl:max-w-3xl  mx-auto text-center">
            <h1
                class="md:text-[48.92px] 2xl:text-[68.92px] leading-[103.38px] font-bold mb-4 text-[#212529] tracking-[0.01em]">
                weFem Quiz!
            </h1>
            <p
                class="md:text-[21.1px] 2xl:text-[30.75px] md:leading-[36.12px] 2xl:leading-[46.12px] tracking-[0.01em] font-semibold mb-4 gap-2">
                ¿Esta es
                la
                primera vez que utilizarías un
                método alternativo a toallas y tampones?
                @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1f914',
                    'class' => 'h-[30.75px] inline-flex',
                ])</p>

            <div class="space-x-4 w-full flex mt-12">
                <button onclick="showCard(3)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold md:py-3 2xl:py-4 px-6 rounded-[20px] md:text-[16.94px] 2xl:text-[20.94px] tracking-[0.01em] transition-colors w-full border-2 border-[#FF9900] duration-300">
                    ¡Sí! Quiero probar <br /> algo nuevo
                </button>
                <button onclick="showCard(4)"
                    class="bg-white text-[#FF9900] hover:bg-[#FF9900]  hover:text-white font-semibold  md:py-3 2xl:py-4 px-6 rounded-[20px] md:text-[16.94px] 2xl:text-[20.94px] tracking-[0.01em] transition-colors w-full border-2 border-[#FF9900] duration-300">
                    No, ya he usado uno antes
                </button>
            </div>
            <div class="flex justify-between mt-12">
                <button onclick="showCard(1)"
                    class=" hover:opacity-90 font-semibold flex items-center text-[#5F48B7] md:text-[18.13px]  2xl:text-[23.13px] leading-[34.69px] tracking-[0.01em]">
                    ← Volver
                </button>
                <button onclick="showCard(3)"
                    class="text-[#5F48B7] hover:opacity-90 font-semibold flex items-center md:text-[18.13px]  2xl:text-[23.13px] leading-[34.69px] tracking-[0.01em]">
                    Siguiente →
                </button>
            </div>
        </div>
    </div>



    <div class="flex justify-end  w-full md:w-1/2">
        <img src="https://i.ibb.co/Nd0JBkBk/image.png" alt="weFem productos"
            class="md:w-full md:h-[600px]  2xl:min-w-[873px] 2xl:h-[789px] w-full  object-cover object-center flex-shrink-0">
    </div>
</div>
</div>
