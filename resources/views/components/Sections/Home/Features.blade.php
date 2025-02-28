 @php
     $features = [
         [
             'title' => 'Envíos a todo el Perú',
             'subtitle' => 'Recibe tus productos hasta en 24 horas.',
             'image' => 'https://i.ibb.co/BYR3PPB/ba3a5fff3a195db580c1f035b840eedb.png',
         ],
         [
             'title' => 'Protege hasta 12 horas',
             'subtitle' => 'Siéntete más segura de díae y de noche.',
             'image' => 'https://i.ibb.co/jkr7chNC/34b597fc8a9f1835a421906cc5c3b744.png',
         ],
         [
             'title' => 'Hipoalergénica',
             'subtitle' => 'Suaves para la piel y reducen el riesgo de irritación o alergias.',
             'image' => 'https://i.ibb.co/bMzcpDhD/b30c48c2966cfda0155cbff6dac32aab.png',
         ],
         [
             'title' => 'Libre de BPA',
             'subtitle' => 'Silicona certificada por la FDA y DIGEMID',
             'image' => 'https://i.ibb.co/tPsGqBnc/f69ea67ac63864cfc99caee8c86b4d53.png',
         ],
     ];

 @endphp



 <section class="bg-[#F2F2F2]   py-6 overflow-hidden">
     <div class="px-[5%] mx-auto relative" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out-quart">
         <div class="flex w-full gap-4 whitespace-nowrap transition-none">
             @foreach ($features as $feature)
                 <div class="flex items-center gap-3 justify-start w-1/4">
                     <div class="relative z-10 w-2/12 ">
                         <img src="{{ $feature['image'] }}" alt="Feature 1" class="w-full h-auto  object-cover" />
                     </div>
                     <div class="w-11/12">
                         <h3 class="text-[17.4px] font-bold leading-[20.88px]  w-full text-[#212529]">
                             {{ $feature['title'] }}</h3>
                         <p class="text-[14.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                             {{ $feature['subtitle'] }}</p>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
