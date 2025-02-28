<div class="flex gap-8 bg-[#EFE5FF]  justify-center">
    <div class="flex flex-col w-full md:w-1/2 justify-center text-[#212529]">
        <div class="max-w-xl mx-auto text-center">
            <h1 class="text-[68.92px] leading-[103.38px] font-bold mb-4 text-[#212529] tracking-[0.01em]">weFem Quiz!
            </h1>
            <h2 class="text-[30.75px] leading-[46.12px] tracking-[0.01em] font-semibold mb-4 gap-2">¿Cual es tu tipo de
                flujo? @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1fa78',
                    'class' => 'h-[30.75px] inline-flex',
                ])</h2>

            <div class="space-x-4 w-full flex mt-12">
                <button onclick="showCard(4)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] text-[20.94px] tracking-[0.01em] transition-colors w-[203px] h-[94px] border-2 border-[#FF9900] duration-300">
                    Leve
                </button>
                <button
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] text-[20.94px] tracking-[0.01em] transition-colors w-[203px] h-[94px] border-2 border-[#FF9900] duration-300">
                    Moderado
                </button>
                <button
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] text-[20.94px] tracking-[0.01em] transition-colors w-[203px] h-[94px] border-2 border-[#FF9900] duration-300">
                    Abundante
                </button>
            </div>
            <div class="flex justify-between mt-12">
                <button onclick="showCard(1)"
                    class=" hover:opacity-90 font-semibold flex items-center text-[#5F48B7] text-[23.13px] leading-[34.69px] tracking-[0.01em]">
                    ← Volver
                </button>
                <button
                    class="text-[#5F48B7] hover:opacity-90 font-semibold flex items-center text-[23.13px] leading-[34.69px] tracking-[0.01em]">
                    Siguiente →
                </button>
            </div>
        </div>
    </div>


    <div class="flex justify-center w-full md:w-1/2">
        <img src="https://i.ibb.co/twC7bmTR/image.png" alt="weFem productos"
            class="max-w-[873px] max-h-[789px] w-full h-auto object-cover object-center flex-shrink-0">
    </div>
</div>
