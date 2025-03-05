<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-BQmS5iMH.css') }}" />
    <script src="{{ asset('build/assets/app-CbEvcXly.js') }}" defer></script>

    <style>
        .font-bebas {
            font-family: "Bebas Neue", serif;
        }

        .font-poppins {
            font-family: "Poppins", serif;
        }
    </style>
</head>

<body class="bg-white relative">

    @include('components.Checkout.Header')

    <main class="bg-[#EFE5FF] relative font-poppins pb-24">
        <!-- Header -->
        <div
            class="md:max-w-5xl 2xl:max-w-6xl mx-auto  py-12 flex flex-wrap justify-center gap-x-8 tracking-[0.38px] leading-[22.85px] md:text-[18.01px] 2xl:text-[22.01px] text-[#404040]">
            <div class="flex items-center gap-1">• SSL Pago Seguro</div>
            <div class="flex items-center gap-1">• 24/7 Atención al cliente</div>
            <div class="flex items-center gap-1">• Pago online</div>
        </div>

        <!-- Main Content -->
        <div class="md:max-w-5xl 2xl:max-w-7xl relative mx-auto bg-white rounded-[35px]  shadow-sm p-12 ">
            <div class="flex gap-8">
                <!-- Left Column - Personal Information -->
                <div class="w-7/12">
                    <h2
                        class="md:text-[18.69px] 2xl:text-[22.69px] leading-[27.05px] tracking-[-0.09px] font-semibold mb-4 text-[#000000]">
                        INFORMACIÓN PERSONAL</h2>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="nombres"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                Nombres *
                            </label>
                            <input type="text" id="nombres"
                                class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                2xl:rounded-[16px] 2xl:h-[53px]" />
                        </div>
                        <div>
                            <label for="apellidos"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                Apellidos *
                            </label>
                            <input type="text" id="nombres"
                                class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                2xl:rounded-[16px] 2xl:h-[53px]" />
                        </div>

                    </div>

                    <div class="mb-4">
                        <label for="pais"
                            class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                            País *
                        </label>
                        <div
                            class="w-full flex items-center px-3  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                            2xl:rounded-[16px] 2xl:h-[53px]">
                            Perú
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="region"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                Región/provincia *
                            </label>
                            <div class="relative">
                                <select id="region"
                                    class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                    2xl:rounded-[16px] 2xl:h-[53px]
                                    appearance-none">
                                    <option value="">Seleccionar</option>
                                </select>

                            </div>
                        </div>
                        <div>
                            <label for="distrito"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                Distrito/Departamento *
                            </label>
                            <input type="text" id="distrito"
                                class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                2xl:rounded-[16px] 2xl:h-[53px]" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="direccion"
                            class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                            Dirección completa *
                        </label>
                        <input type="text" id="direccion"
                            class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px] 2xl:rounded-[16px]
                            2xl:h-[53px]" />
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="interior"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                N° interior:
                            </label>
                            <input type="text" id="interior"
                                class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                2xl:rounded-[16px] 2xl:h-[53px]" />
                        </div>
                        <div>
                            <label for="postal"
                                class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                Código postal:
                            </label>
                            <input type="text" id="postal"
                                class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                                2xl:rounded-[16px] 2xl:h-[53px]" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="correo"
                            class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                            Correo *
                        </label>
                        <input type="email" id="correo"
                            class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px] 2xl:rounded-[16px]
                            2xl:h-[53px]"" />
                    </div>

                    <div class="mb-6">
                        <label for="telefono"
                            class="block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                            Teléfono celular *
                        </label>
                        <input type="tel" id="telefono"
                            class="w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px] 2xl:rounded-[16px]
                            2xl:h-[53px]" />
                    </div>

                    <div class="2xl:mb-4">
                        <h2
                            class="md:text-[18.69px] 2xl:text-[22.69px] leading-[27.05px] tracking-[-0.09px] font-semibold mb-4 text-[#000000]">
                            PAGO</h2>
                        <div class="w-full mx-auto">
                            <div class="border border-gray-300 rounded-2xl p-4">
                                <!-- Header with logos -->
                                <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
                                    <!-- Culqi logo -->
                                    <img src="https://i.ibb.co/dwfWfgsX/culqi-logo-removebg-preview.png" alt="Culqi"
                                        class="md:h-4 2xl:h-6 object-contain" />

                                    <!-- Payment methods logos -->
                                    <div class="flex flex-wrap justify-center gap-4">
                                        <!-- Visa -->
                                        <img src="https://i.ibb.co/1YvMxrz0/visa.png" alt="Visa"
                                            class="md:h-4 2xl:h-6" />
                                        <!-- Mastercard -->
                                        <img src="https://i.ibb.co/21XSG1Mm/mastercard.png" alt="Mastercard"
                                            class="md:h-4 2xl:h-6" />
                                        <!-- Diners -->
                                        <img src="https://i.ibb.co/qFknFPY4/diners.png" alt="Diners Club"
                                            class="md:h-4 2xl:h-6" />
                                        <!-- American Express -->
                                        <img src="https://i.ibb.co/s95JmrPb/amex.png" alt="American Express"
                                            class="md:h-4 2xl:h-6" />
                                        <!-- Yape -->
                                        <img src="https://i.ibb.co/8D1qxNmj/yape.png" alt="Yape"
                                            class="md:h-4 2xl:h-6" />
                                        <!-- Pago Efectivo -->
                                        <img src="https://i.ibb.co/s9NxzGM5/33136169-removebg-preview.png"
                                            alt="Pago Efectivo" class="md:h-4 2xl:h-6" />
                                    </div>
                                </div>

                                <!-- Payment methods text -->
                                <div class="text-[#515151] md:text-[11.15px]  2xl:text-[14.15px] leading-[15.68px]">
                                    <p>
                                        Acepta pagos con
                                        <span class="font-bold">tarjetas de débito y crédito, Yape, Cuotéalo BCP y
                                            PagoEfectivo</span>
                                        <span>(billeteras móviles, agentes y bodegas).</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p
                        class="md:text-[10.15px] 2xl:text-[13.15px] p-4 tracking-[-0.05px] text-center leading-[15.68px] text-[#000000] 2xl:mt-4">
                        Tus datos personales se utilizarán para procesar tu pedido, respaldar tu experiencia en este
                        sitio
                        web y para otros fines descritos en nuestra política de privacidad.
                    </p>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="w-5/12">
                    <h2
                        class="md:text-[18.69px] 2xl:text-[22.69px] px-8 leading-[27.05px] tracking-[-0.09px] font-semibold mb-4 text-[#000000]">
                        TU PEDIDO</h2>

                    <div class="bg-[#EFE5FF] border border-gray-300 rounded-[27px] p-6 mb-4">
                        <div
                            class="flex justify-between mb-2 md:text-[16.96px] 2xl:text-[20.96px] leading-[24.99px] tracking-[-0.08px] font-semibold text-[#000000]">
                            <div>Producto</div>
                            <div>Subtotal</div>
                        </div>

                        <div class="border-b border-[#000000] ">
                            <!-- Product 1 -->
                            <div class="flex items-center justify-between gap-4 py-3  ">
                                <div class="w-3/12 ">
                                    <img src="https://i.ibb.co/1tsnJxPj/image.png" alt="Wepock"
                                        class="w-full h-auto rounded-[6.26px]" />
                                </div>

                                <div class="w-5/12 flex justify-start items-center">
                                    <div
                                        class="text-[#000000] md:text-[13.92px] 2xl:text-[16.92px] leading-[20.17px] tracking-[-0.07px]">
                                        <div>Wepock</div>
                                        <div>Disco menstrual</div>
                                    </div>
                                </div>
                                <div class="w-2/12 flex justify-start items-center ">
                                    <div
                                        class="md:text-[18.23px] 2xl:text-[22.23px] leading-[26.51px] tracking-[-0.09px] ">
                                        x1</div>
                                </div>
                                <div class="w-2/12 flex justify-end items-center">
                                    <div
                                        class="md:text-[18.23px] 2xl:text-[22.23px] leading-[26.51px] tracking-[-0.09px]">
                                        S/149.90</div>
                                </div>
                            </div>

                            <!-- Product 2 -->
                            <div class="flex items-center justify-between gap-4 py-3 ">
                                <div class="w-3/12 ">
                                    <img src="https://i.ibb.co/1tsnJxPj/image.png" alt="Wepock"
                                        class="w-full h-auto rounded-[6.26px]" />
                                </div>

                                <div class="w-5/12 flex justify-start items-center">
                                    <div
                                        class="text-[#000000 md:text-[13.92px] 2xl:text-[16.92px] leading-[20.17px] tracking-[-0.07px]">
                                        <div>Lubricante</div>

                                    </div>
                                </div>
                                <div class="w-2/12 flex justify-start items-center ">
                                    <div
                                        class="md:text-[18.23px] 2xl:text-[22.23px] leading-[26.51px] tracking-[-0.09px] ">
                                        x1</div>
                                </div>
                                <div class="w-2/12 flex justify-end items-center">
                                    <div
                                        class="md:text-[18.23px] 2xl:text-[22.23px] leading-[26.51px] tracking-[-0.09px]">
                                        S/25.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- Subtotal -->
                        <div
                            class="flex md:text-[17.96px] 2xl:text-[20.96px] leading-[24.99px] tracking-[-0.08px] font-semibold justify-between py-6 border-b border-[#000000]">
                            <div>Subtotal</div>
                            <div class="font-normal md:text-[18.23px] 2xl:text-[22.23px] leading-[26.51px]">S/208.70
                            </div>
                        </div>

                        <!-- Total -->
                        <div
                            class="flex md:text-[28.36px] 2xl:text-[40.36px] leading-[48.13px] tracking-[-0.16px] justify-between md:pt-4 2xl:py-6 text-xl font-bold">
                            <div>Total</div>
                            <div class="md:text-[24.84px] 2xl:text-[34.84px] leading-[41.54px]">S/209.70</div>
                        </div>
                    </div>

                    <!-- Coupon -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between gap-2 mb-2">
                            <div
                                class="px-6 block md:text-[15px] 2xl:text-[20px] leading-[27.05px] tracking-[-0.09px]  mb-1 ">
                                ¿Tienes un
                                cupón?</div>
                            <button
                                class="md:text-[15px] 2xl:text-[20px] px-8 leading-[27.05px] tracking-[-0.09px] font-semibold mb-4 text-[#000000]">APLICAR</button>
                        </div>
                        <input type="text"
                            class=" w-full  border border-gray-300  md:rounded-[12px]  md:h-[43px]
                            2xl:rounded-[16px] 2xl:h-[53px]""
                            placeholder="" />
                    </div>

                    <div class="w-full flex justify-center">
                        <!-- Pay Button -->
                        <button
                            class=" bg-[#FF9900] hover:opacity-90 text-white font-bold md:h-[59.49px] 2xl:h-[79.49px] w-[412.76px] rounded-[10.19px] transition md:text-[18.44px] 2xl:text-[23.44px] 2xl:leading-[79.49px] tracking-[2.75px] ">
                            PAGAR AHORA
                        </button>
                    </div>
                </div>
            </div>
            <!-- WhatsApp Support -->
            <div
                class="absolute md:w-[290px] 2xl:w-[364px] px-6 md:h-[55px]   2xl:h-[75px]  -bottom-10 -right-10 flex items-center bg-[#5F48B7] text-white rounded-[18px] shadow-lg">
                <div class="relative  w-full flex items-center justify-between">
                    <div class="mr-2 md:text-[18.59px] 2xl:text-[26.59px] leading-[22.41px] font-medium">¿Dudas?
                        Escríbenos</div>
                    <div class="absolute md:-right-16 2xl:-right-28 top-1/2 transform -translate-y-1/2">
                        <img src="https://i.ibb.co/350SJv39/64ab2cd4fdef6803049b39dd2a471518.png"
                            class="md:w-[100px] 2xl:w-[157px] h-auto object-contain" />
                    </div>
                </div>
            </div>
        </div>


    </main>
    @include('components.Sections.Home.Footer-home')
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
