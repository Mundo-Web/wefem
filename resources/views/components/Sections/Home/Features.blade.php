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



 <section class="bg-[#EFE5FF] py-8">
     <div class="max-w-6xl mx-auto grid grid-cols-4 gap-4" data-aos="fade-up" data-aos-duration="1000"
         data-aos-easing="ease-in-out-quart">

         @foreach ($features as $feature)
             <div class="flex items-center gap-2">
                 <img src="{{ $feature['image'] }}" alt="Feature 1" class="h-14 w-14 object-contain" />
                 <div>
                     <h3 class="text-base font-bold">{{ $feature['title'] }}</h3>
                     <p class="text-[13px] ">{{ $feature['subtitle'] }}</p>
                 </div>
             </div>
         @endforeach

     </div>
 </section>
