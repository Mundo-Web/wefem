<div class="flex w-full justify-between gap-8 bg-[#EFE5FF]  items-center">
    <div class="flex  flex-col w-full md:w-1/2 justify-center text-[#212529]">
        <div class="px-[5%] max-w-2xl lg:px-0 mx-auto text-center">

            <h2 class="text-[27px] 2xl:text-[32.21px] leading-[46.12px] tracking-[0.01em] font-semibold mb-4 gap-2">
                ¡Genial! Hemos
                encontrado el producto
                menstrual perfecto para ti @include('components.Emoji.EmojiApple', [
                    'emojiCode' => '1f497',
                    'class' => 'h-[30.75px] inline-flex',
                ])</h2>
            <p class="mb-8 text-[18.77px] 2xl:text-[23.77px] leading-[31.81px] tracking-[0.01em]">
                Ingresa tu email para obtener tus resultados y recibir un
                email con un <strong>cupón exclusivo de 10% OFF</strong> ¡ solo para ti!
            </p>
            <div class="space-x-4 w-full ">

                <input placeholder="Déjanos tu email aquí"
                    class="bg-white hover:bg-gray-100 text-[#FF9900] font-semibold py-5 px-6 rounded-xl text-lg transition-colors w-full border-2 border-[#FF9900] focus:ring-0 focus:outline-none">
                </input>

            </div>
            <p class="mb-8 text-[15px] 2xl:text-[16.26px]  leading-[22.84px] tracking-[0.01em] mt-6 text-[#000000]">
                Dejándonos tu e-mail aceptas recibir novedades y promociones de wefem
            </p>
            <div class="space-x-4 w-full flex justify-center">
                <button onclick="showCard(6)"
                    class="bg-white hover:bg-[#FF9900]  text-[#FF9900] hover:text-white font-semibold py-4 px-6 rounded-[20px] text-[20.94px] tracking-[0.01em] transition-colors w-[393px] h-[94px] border-2 border-[#FF9900] duration-300">
                    ¡Obtener mis resultados!
                </button>
            </div>

        </div>
    </div>





    <div class="flex justify-end  w-full md:w-1/2">
        <img src="https://i.ibb.co/3yHQRrpx/image.png" alt="weFem productos"
            class="min-w-[873px] h-[789px] w-full object-cover object-center flex-shrink-0">
    </div>
</div>
