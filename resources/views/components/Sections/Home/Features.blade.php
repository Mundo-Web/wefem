 @php
     $features = [
         [
             'title' => 'Envíos a todo el Perú',
             'subtitle' => 'Recibe tus productos hasta en 24 horas.',
             'image' => 'https://i.ibb.co/BYR3PPB/ba3a5fff3a195db580c1f035b840eedb.png',
         ],
         [
             'title' => 'Protege hasta 12 horas',
             'subtitle' => 'Siéntete más segura de días y de noche.',
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



 <section class="bg-[#EFE5FF] md:py-8  2xl:py-10 overflow-hidden">
     <div class="px-[5%]  mx-auto relative">
         <div class="flex w-full md:max-w-5xl 2xl:max-w-7xl mx-auto gap-4 lg:gap-8 whitespace-nowrap transition-none">
             @foreach ($features as $feature)
                 <div class="flex items-center gap-3 justify-start w-auto">
                     <div class="relative z-10 w-2/12 ">
                         <img src="{{ $feature['image'] }}" alt="Feature 1" class="w-full h-auto  object-cover" />
                     </div>
                     <div class="w-9/12">
                         <h3 class="md:text-[15.33px] text-[18.4px] font-bold leading-[20.88px]  w-full text-[#212529]">
                             {{ $feature['title'] }}</h3>
                         <p
                             class="md:text-[12.3px] 2xl:text-[15.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                             {{ $feature['subtitle'] }}</p>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
