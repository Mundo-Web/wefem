<div class="flex w-full justify-between gap-8 bg-[#EFE5FF]  items-center">
    <div class="flex  flex-col w-full md:w-1/2 justify-center text-[#212529]">
        <div class="px-[5%] md:px-0 md:max-w-lg 2xl:max-w-2xl   mx-auto text-center">
            <h1
                class="md:text-[48.92px] 2xl:text-[68.92px] 2xl:leading-[103.38px] font-bold mb-4 text-[#212529] tracking-[0.01em]">
                weFem Quiz!
            </h1>
            <h2
                class="md:text-[21.1px] 2xl:text-[30.75px] md:leading-[36.12px] 2xl:leading-[46.12px] tracking-[0.01em] font-semibold mb-4 gap-2">
                ¿Te interesaría tener
                relaciones con
                la regla sin que manche?
                @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1f608',
                    'class' => 'h-[30.75px] inline-flex',
                ])</h2>

            <div class="space-x-4 w-full flex md:mt-8 2xl:mt-12">
                <button onclick="showCard(5)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] md:text-[16.94px] 2xl:text-[20.94px] tracking-[0.01em] transition-colors w-full md:h-[74px]  2xl:h-[94px] border-2 border-[#FF9900] duration-300">
                    ¡Sí! Sería lo max @include('components.Emoji.EmojiApple', [
                        'emojiCode' => '1f525',
                        'class' => 'h-[30.75px] inline-flex',
                    ])
                </button>
                <button onclick="showCard(7)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] md:text-[16.94px] 2xl:text-[20.94px] tracking-[0.01em] transition-colors w-full md:h-[74px]  2xl:h-[94px] border-2 border-[#FF9900] duration-300">
                    No, me da igual
                    @include('components.Emoji.EmojiApple', [
                        'emojiCode' => '1f937-200d-2640-fe0f',
                        'class' => 'h-[30.75px] inline-flex',
                    ])

                </button>

            </div>
            <div class="flex justify-between mt-12">
                <button onclick="showCard(4)"
                    class=" hover:opacity-90 font-semibold flex items-center text-[#5F48B7] md:text-[18.13px]  2xl:text-[23.13px]  leading-[34.69px] tracking-[0.01em]">
                    ← Volver
                </button>
                <button onclick="showCard(5)"
                    class="text-[#5F48B7] hover:opacity-90 font-semibold flex items-center md:text-[18.13px]  2xl:text-[23.13px]  leading-[34.69px] tracking-[0.01em]">
                    Siguiente →
                </button>
            </div>
        </div>
    </div>



    <div class="flex justify-end  w-full md:w-1/2">
        <img src="https://i.ibb.co/7xKxbRz0/image.png" alt="weFem productos"
            class="md:w-full md:h-[600px]  2xl:min-w-[873px] 2xl:h-[789px] w-full object-cover object-center flex-shrink-0">
    </div>
</div>
