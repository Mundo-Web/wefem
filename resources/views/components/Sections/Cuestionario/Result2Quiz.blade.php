<div class="flex w-full justify-between gap-8 bg-[#EFE5FF]  items-center">
    <div class="flex  flex-col w-full md:w-1/2 justify-center text-[#212529]">
        <div class="px-[5%] max-w-3xl lg:px-0 mx-auto text-center">
            <h2 class="text-[30.75px] leading-[46.12px] tracking-[0.01em] font-semibold mb-4 gap-2">Tu mejor aliada sería
            </h2>
            <h1 class="text-[68.92px] leading-[103.38px] font-bold mb-4 text-[#212529] tracking-[0.01em]">
                @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1f377',
                    'class' => 'h-[68.75px] inline-flex',
                ]) weCup @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1f377',
                    'class' => 'h-[68.75px] inline-flex',
                ])
            </h1>
            <p class="mb-8 text-[22.37px] leading-[29.93px] tracking-[0.01em]">
                Un disco menstrual de silicona que recoge tu flujo
                de forma segura. Se coloca en la base del cuello uterino,
                permitiéndote así tener sexo con la regla, sin manchas ni fugas.



            </p>
            <p class="mb-8 text-[22.37px] leading-[29.93px] tracking-[0.01em] font-bold mt-6 text-[#212529]">
                ¡Revisa tu e-mail para obtener tu descuento exclusivo!
            </p>
            <div class="space-x-4 w-full flex justify-center mt-6">
                <button onclick="showCard(5)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] text-[20.94px] tracking-[0.01em] transition-colors w-[393px] h-[94px] border-2 border-[#FF9900] duration-300">
                    ¡Comprar ahora!
                </button>
            </div>

        </div>
    </div>



    <div class="flex justify-end  w-full md:w-1/2">
        <img src="https://i.ibb.co/XrvRRyK3/image.png" alt="weFem productos"
            class="min-w-[873px] h-[789px] w-full object-cover object-center flex-shrink-0">
    </div>
</div>
